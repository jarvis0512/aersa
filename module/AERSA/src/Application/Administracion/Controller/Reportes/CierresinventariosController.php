<?php

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CierresinventariosController extends AbstractActionController {

    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $inventarios = \InventariomesQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/administracion/reportes/cierresinventarios/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'inventarios' => $inventarios,
        ));
        return $view_model;
    }

    public function nuevoAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        //$collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
        //INTANCIAMOS NUESTRA VISTA        
        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        foreach ($almacenes as $almacen) {
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }

        $auditor_array = array();
        $usuarios = \UsuarioQuery::create()->filterByIdrol(4)->useUsuariosucursalQuery()->filterByIdsucursal($idsucursal)->endUse()->find();
        $usuario = new \Usuario();
        foreach ($usuarios as $usuario) {
            $id = $usuario->getIdusuario();
            $auditor_array[$id] = $usuario->getUsuarioNombre();
        }
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $idalmacen=$post_data['idalmacen'];
            $post_data['idusuario']=$session['idusuario'];
            $idauditor=$post_data['idauditor'];
            $post_data['idempresa']=$idempresa;
            $post_data['idsucursal']=$idsucursal;
            $inventariocierremes =  new \Inventariomes();
            foreach ($post_data as $key => $value) {
                if (\InventariomesPeer::getTableMap()->hasColumn($key)) {
                    $inventariocierremes->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $inventariocierremes->save();
            
            foreach($post_data['reporte'] as $reporte) {
                $inventariocierremes_detalle = new \Inventariomesdetalle();
                foreach ($reporte as $key => $value) {
                    if (\InventariomesdetallePeer::getTableMap()->hasColumn($key)) {
                        $inventariocierremes_detalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                if (isset($reporte['inventariomesdetalle_revisada'])) {
                    $inventariocierremes_detalle->setInventariomesdetalleRevisada(1);
                }
                $inventariocierremes_detalle->setIdinventariomes($inventariocierremes->getIdinventariomes());
                $inventariocierremes_detalle->save();
            }
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/administracion/reportes/cierresinventarios');
        }
        $ts = strtotime("now");
        $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
        //dia inicio de semana date('Y-m-d',$start);
        $fecha = date('Y-m-d', strtotime('next sunday', $start));

        $form = new \Application\Administracion\Form\Reportes\CierresinventariosForm($fecha, $almacen_array, $auditor_array);
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/administracion/reportes/cierresinventarios/nuevo');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }

    public function batchAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();


        $request = $this->getRequest();
        if ($request->isPost()) {
            $idempresa = $session['idempresa'];
            $idsucursal = $session['idsucursal'];
            $post_data = $request->getPost();
            /* obtiene todos los datos en este formato:
              array(5) { ["CLAVE"]=> string(1) "2" ["NOMBRE"]=> string(4) "test" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "1" ["TOTAL"]=> string(1) "1" }
              array(5) { ["CLAVE"]=> string(1) "3" ["NOMBRE"]=> string(19) "Servicio de tequila" ["UNIDAD"]=> string(7) "Botella" ["CANTIDAD"]=> string(1) "5" ["TOTAL"]=> string(1) "5" }
              array(5) { ["CLAVE"]=> string(1) "4" ["NOMBRE"]=> string(17) "Botella Don Julio" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "7" ["TOTAL"]=> string(1) "7" }
              array(5) { ["CLAVE"]=> string(1) "5" ["NOMBRE"]=> string(6) "Fresca" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "8" ["TOTAL"]=> string(1) "8" }
             */
            $idalmacen = $post_data['almacen'];
            $idusuario = $post_data['auditor'];
            $productosReporte = array();
            foreach ($post_data['inventario']["Sheet1"] as $producto) {
                if (count($producto) == 5 && $producto['CLAVE'] != 'CLAVE')
                    $productosReporte[$producto['CLAVE']] = $producto['TOTAL'];
            }
            $ts = strtotime("now");
            $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
            $inicio_semana = date('Y-m-d', $start);
            $fin_semana = date('Y-m-d', strtotime('next sunday', $start));

            $fin_semana_anterior = date('Y-m-d', strtotime('last sunday', $start));
            $fin_semana_anterior = $fin_semana_anterior . " 23:59:59";

            $inicio_semana = $inicio_semana . " 00:00:00   ";
            $fin_semana = $fin_semana . " 23:59:59";

            //inventario anterior
            $inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->exists();
            if ($inventario_anterior)
                $id_inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->findOne()->getIdinventariomes();

            $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
            $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();

            $objrequisicionesOrigen = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
            $objordentabOrigen = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();

            $objrequisicionesDestino = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
            $objordentabDestino = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();

            $objdevoluciones = \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();

            $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
            $objproducto = new \Producto();

            $reporte = array();
            $sobrante = 0;
            $faltante = 0;
            $timpFis = 0;
            $falim = 0;
            $fbebi = 0;
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $color = true;
            $row = 0;
            foreach ($objproductos as $objproducto) {
                $exisinicial = 0;
                if ($inventario_anterior) {
                    $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleDiferencia();
                }
                $totalProductoCompra = 0;
                $compra = 0;
                foreach ($objcompras as $objcompra) {
                    $objcompradetalles = \CompradetalleQuery::create()
                            ->filterByIdcompra($objcompra->getIdcompra())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcompradetalles as $objcompradetalle) {
                        $compra+=$objcompradetalle->getCompradetalleCantidad();
                        $totalProductoCompra+=$objcompradetalle->getCompradetalleSubtotal();
                    }
                }

                $requisicionIng = 0;
                foreach ($objrequisicionesDestino as $objrequisicion) {
                    $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                            ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objrequisiciondetalle = new \Requisiciondetalle();
                    foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                        $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                    }
                }

                $ordenTabIng = 0;
                foreach ($objordentabDestino as $objordentab) {
                    $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objordentabdetalle = new \Ordentablajeriadetalle();
                    foreach ($objordentabdetalles as $objordentabdetalle) {
                        $ordenTabIng+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                    }
                }

                $venta = 0;
                foreach ($objventas as $objventa) {
                    $objventadetalles = \VentadetalleQuery::create()
                            ->filterByIdventa($objventa->getIdventa())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objventadetalle = new \Ventadetalle();
                    foreach ($objventadetalles as $objventadetalle) {
                        $venta+=$objventadetalle->getVentadetalleCantidad();
                    }
                }

                $requisicionEg = 0;
                foreach ($objrequisicionesOrigen as $objrequisicion) {
                    $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                            ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                            ->filterByIdpadre(NULL)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objrequisiciondetalle = new \Requisiciondetalle();
                    foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                        $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                    }
                }

                $ordenTabEg = 0;
                foreach ($objordentabOrigen as $objordentab) {
                    $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objordentabdetalle = new \Ordentablajeriadetalle();
                    foreach ($objordentabdetalles as $objordentabdetalle) {
                        $ordenTabEg+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                    }
                }

                $devolucion = 0;
                foreach ($objdevoluciones as $objdevolucion) {
                    $objdevoluciondetalles = \DevoluciondetalleQuery::create()
                            ->filterByIddevolucion($objdevolucion->getIddevolucion())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objdevoluciondetalle = new \Devoluciondetalle();
                    foreach ($objdevoluciondetalles as $objdevoluciondetalle) {
                        $devolucion+=$objdevoluciondetalle->getDevoluciondetalleCantidad();
                    }
                }

                $stockTeorico = ($compra + $requisicionIng + $ordenTabIng) - ($venta + $requisicionEg + $ordenTabEg);

                $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $stockFisico = 0;
                if (isset($productosReporte[$objproducto->getIdproducto()]))
                    $stockFisico = $productosReporte[$objproducto->getIdproducto()];

                $dif = $stockTeorico - $stockFisico;

                $costoPromedio = ($compra != 0 && $totalProductoCompra != 0) ? $totalProductoCompra / $compra : 0;
                $costoPromedio = ($costoPromedio > 0) ? $costoPromedio * -1 : $costoPromedio;
                $difImporte = $dif * $costoPromedio;
                if (0 < $difImporte)
                    $sobrante+=$difImporte;
                else
                    $faltante+=$difImporte;
                $colorbg = ($color) ? $bgfila : $bgfila2;
                $color = !$color;
                $impFis = $stockFisico * $costoPromedio;
                $stockFisico=($stockFisico==0) ? "" : $stockFisico;
                $timpFis+=$impFis;
                if ($objproducto->getCategoriaRelatedByIdcategoria()->getIdcategoria() == 1)
                    $falim+=$impFis;
                if ($objproducto->getCategoriaRelatedByIdcategoria()->getIdcategoria() == 2)
                    $fbebi+=$impFis;
                $idproducto = $objproducto->getIdproducto();
                $nomPro = $objproducto->getProductoNombre();
                //<input type='hidden'  name='' value=''>
                array_push($reporte, "<tr id='$idproducto' bgcolor='" . $colorbg . "'><td><input type='hidden' name='reporte[$row][idproducto]' value='$idproducto' />$idproducto</td><td>$nomPro</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockinicial]' value='$exisinicial'> $exisinicial</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresocompra]' value='$compra'>$compra</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresorequisicion]' value='$requisicionIng'>$requisicionIng</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresoordentablajeria]' value='$ordenTabIng'>$ordenTabIng</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoventa]' value='$venta'>$venta</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresorequisicion]' value='$requisicionEg'>$requisicionEg</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoordentablajeria]' value='$ordenTabEg'>$ordenTabEg</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresodevolucion]' value='$devolucion'>$devolucion</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockteorico]' value='$stockTeorico'>$stockTeorico</td><td>$unidad</td><td><input required type='text' name='reporte[$row][inventariomesdetalle_stockfisico]' value='$stockFisico'></td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_importefisico]' value='$impFis'>$impFis</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_diferencia]' value='$dif'>$dif</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_costopromedio]' value='$costoPromedio'>$costoPromedio</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_difimporte]' value='$difImporte'>$difImporte</td><td><input type='checkbox' name='reporte[$row][inventariomesdetalle_revisada]'></td></tr>");
                $row++;
            }
            $total = $sobrante + $faltante;
            $responsable = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
            if ($responsable == "")
                $responsable = "N/A";
            array_push($reporte, "<tr><td>Responsable</td><td>$responsable</td><td></td><td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final alimentos</td><td><input type='hidden'  name='inventariomes_finalalimentos' value='$falim'>$falim</td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final bebidas</td><td><input type='hidden'  name='inventariomes_finalbebidas' value='$fbebi'>$fbebi</td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Sobrante</td><td><input type='hidden'  name='inventariomes_sobrantes' value='$sobrante'>$sobrante</td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Faltante</td><td><input type='hidden'  name='inventariomes_faltantes' value='$faltante'>$faltante</td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td><input type='hidden'  name='inventariomes_total' value='$total'>$total</td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Importe Fisico</td><td><input type='hidden'  name='inventariomes_totalimportefisico' value='$impFis'>$impFis</td></tr>");
            return $this->getResponse()->setContent(json_encode($reporte));
        }
    }

}
