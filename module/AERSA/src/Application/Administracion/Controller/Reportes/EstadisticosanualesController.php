<?php

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class EstadisticosanualesController extends AbstractActionController {

    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {

            $post_data = $request->getPost();
            $anio = $post_data['anio'];
            
            
            //mes 1
            $ts = strtotime("now");
            echo $ts;exit;
            
            $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
            var_dump($post_data);exit;
            
            
            
            
            
            
            
            
            $mes = $post_data['mes'];
            $inicio = "$anio-$mes-01 00:00:00";
            if (checkdate($mes, '31', $anio))
                $fin = "$anio-$mes-31 23:59:59";
            elseif (checkdate($mes, '30', $anio))
                $fin = "$anio-$mes-30 23:59:59";
            elseif (checkdate($mes, '28', $anio))
                $fin = "$anio-$mes-28 23:59:59";
            else
                $fin = "$anio-$mes-29 23:59:59";
            $ordenesTablajeria = \OrdentablajeriaQuery::create()->filterByIdsucursal($idsucursal)->filterByOrdentablajeriaFecha(array('min' => $inicio, 'max' => $fin))->find();
            $ordenTablajeria = new \Ordentablajeria();
            $reporte = array();
            $productos = array();
            foreach ($ordenesTablajeria as $ordenTablajeria) {
                if (isset($productos[$ordenTablajeria->getIdproducto()]['total'])) {
                    $productos[$ordenTablajeria->getIdproducto()]['total']+=$ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep']+=1;
                } else {
                    $productos[$ordenTablajeria->getIdproducto()]['total'] = $ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep'] = 1;
                }
            }

            $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
            $productoObj = new \Producto();
            foreach ($productosObj as $productoObj) {
                if (isset($productos[$productoObj->getIdproducto()]['total']))
                    $reporte[3][$productoObj->getIdproducto()] = $productos[$productoObj->getIdproducto()]['total'] / $productos[$productoObj->getIdproducto()]['rep'];
                else
                    $reporte[3][$productoObj->getIdproducto()] = 0;
            }

            /*             * ***************************************************************************************************************************** */
            $mes--;
            if ($mes <= 0) {
                $mes = 12;
                $anio--;
            }
            if ($mes <= 9)
                $mes = '0' . $mes;
            $inicio = "$anio-$mes-01 00:00:00";
            if (checkdate($mes, '31', $anio))
                $fin = "$anio-$mes-31 00:00:00";
            elseif (checkdate($mes, '30', $anio))
                $fin = "$anio-$mes-30 00:00:00";
            elseif (checkdate($mes, '28', $anio))
                $fin = "$anio-$mes-28 00:00:00";
            else
                $fin = "$anio-$mes-29 00:00:00";

            $ordenesTablajeria = \OrdentablajeriaQuery::create()->filterByIdsucursal($idsucursal)->filterByOrdentablajeriaFecha(array('min' => $inicio, 'max' => $fin))->find();
            $ordenTablajeria = new \Ordentablajeria();
            $productos = array();
            foreach ($ordenesTablajeria as $ordenTablajeria) {
                if (isset($productos[$ordenTablajeria->getIdproducto()]['total'])) {
                    $productos[$ordenTablajeria->getIdproducto()]['total']+=$ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep']+=1;
                } else {
                    $productos[$ordenTablajeria->getIdproducto()]['total'] = $ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep'] = 1;
                }
            }

            $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
            $productoObj = new \Producto();
            foreach ($productosObj as $productoObj) {
                if (isset($productos[$productoObj->getIdproducto()]['total']))
                    $reporte[2][$productoObj->getIdproducto()] = $productos[$productoObj->getIdproducto()]['total'] / $productos[$productoObj->getIdproducto()]['rep'];
                else
                    $reporte[2][$productoObj->getIdproducto()] = 0;
            }

            /*             * ***************************************************************************************************************************** */
            $mes--;
            if ($mes <= 0) {
                $mes = 12;
                $anio--;
            }
            if ($mes <= 9)
                $mes = '0' . $mes;
            $inicio = "$anio-$mes-01 00:00:00";
            if (checkdate($mes, '31', $anio))
                $fin = "$anio-$mes-31 00:00:00";
            elseif (checkdate($mes, '30', $anio))
                $fin = "$anio-$mes-30 00:00:00";
            elseif (checkdate($mes, '28', $anio))
                $fin = "$anio-$mes-28 00:00:00";
            else
                $fin = "$anio-$mes-29 00:00:00";

            $ordenesTablajeria = \OrdentablajeriaQuery::create()->filterByIdsucursal($idsucursal)->filterByOrdentablajeriaFecha(array('min' => $inicio, 'max' => $fin))->find();
            $ordenTablajeria = new \Ordentablajeria();
            $productos = array();
            foreach ($ordenesTablajeria as $ordenTablajeria) {
                if (isset($productos[$ordenTablajeria->getIdproducto()]['total'])) {
                    $productos[$ordenTablajeria->getIdproducto()]['total']+=$ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep']+=1;
                } else {
                    $productos[$ordenTablajeria->getIdproducto()]['total'] = $ordenTablajeria->getOrdentablajeriaMerma();
                    $productos[$ordenTablajeria->getIdproducto()]['rep'] = 1;
                }
            }

            $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
            $productoObj = new \Producto();
            foreach ($productosObj as $productoObj) {
                if (isset($productos[$productoObj->getIdproducto()]['total']))
                    $reporte[1][$productoObj->getIdproducto()] = $productos[$productoObj->getIdproducto()]['total'] / $productos[$productoObj->getIdproducto()]['rep'];
                else
                    $reporte[1][$productoObj->getIdproducto()] = 0;
            }

            $mes = $post_data['mes'];
            if ($mes == 1)
                $mes3 = "Enero";
            if ($mes == 2)
                $mes3 = "Febrero";
            if ($mes == 3)
                $mes3 = "Marzo";
            if ($mes == 4)
                $mes3 = "Abril";
            if ($mes == 5)
                $mes3 = "Mayo";
            if ($mes == 6)
                $mes3 = "Junio";
            if ($mes == 7)
                $mes3 = "Julio";
            if ($mes == 8)
                $mes3 = "Agosto";
            if ($mes == 9)
                $mes3 = "Septiembre";
            if ($mes == 10)
                $mes3 = "Octubre";
            if ($mes == 11)
                $mes3 = "Noviembre";
            if ($mes == 12)
                $mes3 = "Diciembre";
            $mes--;
            if ($mes <= 0) {
                $mes = 12;
            }
            if ($mes == 1)
                $mes2 = "Enero";
            if ($mes == 2)
                $mes2 = "Febrero";
            if ($mes == 3)
                $mes2 = "Marzo";
            if ($mes == 4)
                $mes2 = "Abril";
            if ($mes == 5)
                $mes2 = "Mayo";
            if ($mes == 6)
                $mes2 = "Junio";
            if ($mes == 7)
                $mes2 = "Julio";
            if ($mes == 8)
                $mes2 = "Agosto";
            if ($mes == 9)
                $mes2 = "Septiembre";
            if ($mes == 10)
                $mes2 = "Octubre";
            if ($mes == 11)
                $mes2 = "Noviembre";
            if ($mes == 12)
                $mes2 = "Diciembre";
            $mes--;
            if ($mes <= 0) {
                $mes = 12;
            }
            if ($mes == 1)
                $mes1 = "Enero";
            if ($mes == 2)
                $mes1 = "Febrero";
            if ($mes == 3)
                $mes1 = "Marzo";
            if ($mes == 4)
                $mes1 = "Abril";
            if ($mes == 5)
                $mes1 = "Mayo";
            if ($mes == 6)
                $mes1 = "Junio";
            if ($mes == 7)
                $mes1 = "Julio";
            if ($mes == 8)
                $mes1 = "Agosto";
            if ($mes == 9)
                $mes1 = "Septiembre";
            if ($mes == 10)
                $mes1 = "Octubre";
            if ($mes == 11)
                $mes1 = "Noviembre";
            if ($mes == 12)
                $mes1 = "Diciembre";

            $reporte2 = array();
            $nombreEmpresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $nombreSucursal = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalNombre();
            array_push($reporte2, "<tr><td>$nombreEmpresa ($nombreSucursal)</td></tr>");
            array_push($reporte2, "<tr><td>Monitoreo de tablajería</td></tr>");
            array_push($reporte2, "<tr><td>Producto</td><td>$mes1</td><td>$mes2</td><td>$mes3</td></tr>");
            $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->orderByProductoNombre('asc')->find();
            $productoObj = new \Producto();
            foreach ($productosObj as $productoObj) {
                $nombreProducto = $productoObj->getProductoNombre();
                $id = $productoObj->getIdproducto();
                $mes1 = $reporte[1][$id];
                $mes2 = $reporte[2][$id];
                $mes3 = $reporte[3][$id];
                array_push($reporte2, "<tr><td>$nombreProducto</td><td>$mes1</td><td>$mes2</td><td>$mes3</td></tr>");
            }
            return $this->getResponse()->setContent(json_encode($reporte2));
            exit;
        }

        //INTANCIAMOS NUESTRA VISTA
        $min=0;
        $max=0;
        $ingresos=false;
        $compra=false;
        $inventariomes=false;
        $requisicion=false;
        $venta=false;
        $no_data=false;
        if(\IngresoQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $ingresos=true;
            $min=  \IngresoQuery::create()->filterByIdsucursal($idsucursal)->orderByIngresoFecha('asc')->findOne()->getIngresoFecha('Y');
            $max=  \IngresoQuery::create()->filterByIdsucursal($idsucursal)->orderByIngresoFecha('desc')->findOne()->getIngresoFecha('Y');
        }
        
        if(\CompraQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $compra=true;
            $minC= \CompraQuery::create()->filterByIdsucursal($idsucursal)->orderByCompraFechacompra('asc')->findOne()->getCompraFechacompra('Y');
            $maxC= \CompraQuery::create()->filterByIdsucursal($idsucursal)->orderByCompraFechacompra('desc')->findOne()->getCompraFechacompra('Y');
            if($minC>$min)
               $min=$minC;
            if($maxC>$max)
                $max=$maxC;
        }
        
        if(\InventariomesQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $inventariomes=true;
            $minI= \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->orderByInventariomesFecha('asc')->findOne()->getInventariomesFecha('Y');
            $maxI= \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->orderByInventariomesFecha('desc')->findOne()->getInventariomesFecha('Y');
            if($minI>$min)
                $min=$minI;
            if($maxI>$max)
                $max=$maxI;
        }
        
        if(\RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->exists()) {
            $requisicion=true;
            $minR= \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->orderByRequisicionFecha('asc')->findOne()->getRequisicionFecha('Y');
            $maxR= \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->orderByRequisicionFecha('desc')->findOne()->getRequisicionFecha('Y');
            if($minR>$min)
                $min=$minR;
            if($maxR>$max)
                $max=$maxR;
        }
        
        if(\VentaQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $venta=true;
            $minV= \VentaQuery::create()->filterByIdsucursal($idsucursal)->orderByVentaFechaventa('asc')->findOne()->getVentaFechaventa('Y');
            $maxV= \VentaQuery::create()->filterByIdsucursal($idsucursal)->orderByVentaFechaventa('desc')->findOne()->getVentaFechaventa('Y');
            if($minV>$min)
                $min=$minV;
            if($maxV>$max)
                $max=$maxV;
        }
        
        if ($ingresos || $compra || $inventariomes || $requisicion || $venta) {
            $no_data=false;
        } else {
            $no_data=true;
        }
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Administracion\Form\Reportes\EstadisticosanualesForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'no_data' => $no_data,
        ));
        $view_model->setTemplate('/application/administracion/reportes/estadisticosanuales/index');
        return $view_model;
    }

}