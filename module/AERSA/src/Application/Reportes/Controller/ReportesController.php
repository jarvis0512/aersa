<?php

namespace Application\Reportes\Controller;

include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function variacioncostosAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $productos = array();
            $post_data = $request->getPost();
            $ano_inicio = $post_data['ano_inicial'];
            $mes_inicio = $post_data['mes_inicial'];
            $ano_fin = $post_data['ano_final'];
            $mes_fin = $post_data['mes_final'];
            $documento = true;
            if (isset($post_data['generar_reporte']))
                $documento = false;
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($productos, substr($key, 9));
            }
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $fila = 0;
            if (!$documento) {
                $reporte = array("<div align='center'><h3>" . ucfirst($empresa) . "</h3></div>");
                $reporte[1] = "<div align='center'><h3>VARIACIONES DE LOS COSTOS DEL " . $mes_inicio . "/" . $ano_inicio . " VS " . $mes_fin . "/" . $ano_fin . "</h3></div>";
                $fila = 2;
            }
            $color = true;
            $compra = new \Compra();
            foreach ($productos as $idproducto) {
                $objproducto = \ProductoQuery::create()->findPk($idproducto);
                $nombre = $objproducto->getProductoNombre();
                $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $compras = \CompraQuery::create()
                                ->filterByCompraFechacompra
                                        (array('min' => $ano_inicio . '-' . $mes_inicio . '-01 00:00:00', 'max' => $ano_inicio . '-' . $mes_inicio . '-31 23:59:59'))->find();

                $total = 0;
                $cantidad = 0;
                foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }
                $costoold = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                $search = $ano_fin . '-' . $mes_fin;

                $compras = \CompraQuery::create()
                                ->filterByCompraFechacompra
                                        (array('min' => $ano_fin . '-' . $mes_fin . '-01 00:00:00', 'max' => $ano_fin . '-' . $mes_fin . '-31 23:59:59'))->find();
                $total = 0;
                $cantidad = 0;
                foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }
                $costonew = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                $variacion = $costoold - $costonew;
                $variacion = ($variacion < 0) ? $variacion * -1 : $variacion;
                if ($costoold == 0)
                    $porcentajevar = -100;
                else
                    $porcentajevar = (($costonew / $costoold) * 100) - 100;
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                $porcentajevar = ($costoold == 0 && $costonew != 0) ? $porcentajevar * -1 : $porcentajevar;
                $porcentajevar = ($variacion == 0) ? 0 : $porcentajevar;
                $costoold = ($costoold == 0) ? "NA" : $costoold;
                $costonew = ($costonew == 0) ? "NA" : $costonew;
                $variacion = ($variacion == 0) ? "NA" : $variacion;
                $porcentajevar = ($porcentajevar == 0) ? "NA" : $porcentajevar . '%';
                if ($documento)
                    $reporte[$fila] = array('clave' => $idproducto, 'nombre' => $nombre, 'unidad' => $unidad, 'costold' => $costoold, 'costnew' => $costonew, 'var' => $variacion, 'pctvar' => $porcentajevar);
                else
                    $reporte[$fila] = "<tr bgcolor='" . $bg . "'><td> " . $nombre . " </td><td> " . $unidad . " </td><td> " . $costoold . " </td><td> " . $costonew . " </td><td> " . $variacion . " </td><td> " . $porcentajevar . " </td></tr>";
                $fila++;
            }
            if ($documento) {
                $template = '/variacioncostos.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . 'application/files/jasper/templates';
                $inicio = $mes_inicio . "/" . $ano_inicio;
                $fin = $mes_fin . "/" . $ano_fin;
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'fecha',
                        'data' => array('inicial' => $inicio, 'final' => $fin),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'prod',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                        'format' => array(
                            'price' => array('number' => array('prefix' => '$', 'decimals' => 2)),
                            'total' => array('number' => array('prefix' => '$', 'decimals' => 2))
                        )
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render();
                else
                    echo $R->render('excel');
                exit();
            } else {
                $view_model = new ViewModel();
                $view_model->setVariables(array(
                    'reporte' => $reporte,
                    'messages' => $this->flashMessenger(),
                ));
                $view_model->setTemplate('/application/reportes/reportes/variacioncostosreporte');
                return $view_model;
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        $form = new \Application\Reportes\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'categorias' => $categorias,
            'productos' => $productos,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/variacioncostos');
        return $view_model;
    }

    public function formatoinventarioAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {

            $productos = array();
            $idproductos = array();
            $post_data = $request->getPost();
            $template = '/inventarios.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . 'application/files/jasper/templates';
            $formato = $post_data['formato'];

            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($productos, substr($key, 9));
            }
            //array('nombre'=>'Example product','unidad'=>kilo,'cantidad'=>4.5),
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($idproductos, substr($key, 9));
            }
            $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $fila = 0;
            foreach ($idproductos as $idproducto) {
                $objproducto = \ProductoQuery::create()->findPk($idproducto);
                $nombre = $objproducto->getProductoNombre();
                $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $productos[$fila] = array('clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad, 'cantidad' => '');
                $fila++;
            }
            $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
            $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();

            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $R = new \PHPReport($config);
//            $R->setConfig();
            $R->load(array(
                array(
                    'id' => 'compania',
                    'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal, 'almacen' => $almacen),
                    'format' => array(
                        'date' => array('datetime' => 'd/m/Y')
                    )
                ),
                array(
                    'id' => 'prod',
                    'repeat' => true,
                    'data' => $productos,
                    'minRows' => 2,
                    'format' => array(
                        'price' => array('number' => array('prefix' => '$', 'decimals' => 2)),
                        'total' => array('number' => array('prefix' => '$', 'decimals' => 2))
                    )
                )
                    )
            );
            if ($formato == "PDF")
                echo $R->render('PDF');
            else
                echo $R->render('excel');
            exit();
        }

        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $objalmacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->find();
        $almacenes = array();
        foreach ($objalmacenes as $objalmacen) {
            $almacenes[$objalmacen->getIdalmacen()] = $objalmacen->getAlmacenNombre();
        }
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        $form = new \Application\Reportes\Form\FormatoinventarioForm($almacenes);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'categorias' => $categorias,
            'productos' => $productos,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/formatoinventario');
        return $view_model;
    }

    public function getrecientesAction() {
        $dias = $this->params()->fromQuery('dias');
        $fecha = date('Y-m-d', strtotime('-' . $dias . ' day'));
        $hoy = date('Y-m-d');
        $fecha.=' 00:00:00';
        $hoy.=' 23:59:59';
        $idproductos = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $fecha, 'max' => $hoy))->find();
        $compra = new \Compra();
        foreach ($compras as $compra) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
            $compradetalle = new \Compradetalle();
            foreach ($comprasdetalles as $compradetalle) {
                if (!in_array($compradetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $compradetalle->getIdproducto());
            }
        }
        $requisiciones = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $requisicion = new \Requisicion();
        foreach ($requisiciones as $requisicion) {
            $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
            $requisiciondetalle = new \Requisiciondetalle();
            foreach ($requisicionesdetalles as $requisiciondetalle) {
                if (!in_array($requisiciondetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $requisiciondetalle->getIdproducto());
            }
        }
        $ordenestablajeria = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $ordentablajeria = new \Ordentablajeria();
        foreach ($ordenestablajeria as $ordentablajeria) {
            $ordenestablajeriadetalles = \OrdentablajeriadetalleQuery::create()->filterByIdordentablajeria($ordentablajeria->getIdordentablajeria())->find();
            $ordentablajeriadetalle = new \Ordentablajeriadetalle();
            foreach ($ordenestablajeriadetalles as $ordentablajeriadetalle) {
                if (!in_array($ordentablajeriadetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $ordentablajeriadetalle->getIdproducto());
            }
        }

        return $this->getResponse()->setContent(json_encode($idproductos));
    }

    public function entradasporcomprasAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $productos = array();
            $almacenes = array();
            $proveedores = array();
            $post_data = $request->getPost();
            $fecha_inicial = date_create_from_format('d/m/Y', $post_data["fecha_inicial"]);
            $fecha_final = date_create_from_format('d/m/Y', $post_data["fecha_final"]);
            date_time_set($fecha_inicial, 0, 0, 0);
            date_time_set($fecha_final, 23, 59, 59);
            //echo date_format($fecha_inicial, 'Y-m-d H:i:s') . "\n";
            $documento = true;
            if (isset($post_data['generar_reporte']))
                $documento = false;
            foreach ($post_data as $key => $value) {
                if (strpos($key, 'almacen-') !== false) {
                    array_push($almacenes, substr($key, 8));
                }
                if (strpos($key, 'proveedor-') !== false) {
                    array_push($proveedores, substr($key, 10));
                }
                if (strpos($key, 'producto-') !== false) {
                    array_push($productos, substr($key, 9));
                }
            }
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $fila = 0;
            if (!$documento) {
                $reporte = array("<div align='center'><h3>" . ucfirst($empresa) . "</h3></div>");
                $reporte[1] = "<div align='center'><h3>RELACIÓN DE ENTRADAS POR COMPRA DEL " . $post_data["fecha_final"] . " AL " . $post_data["fecha_inicial"] . "</h3></div>";
                $fila = 2;
            }
            $color = true;
            $bgproveedor = "#819FF7";
            $bginfo = "#ADD8E6";
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $bgtotalg = "#EE4444";
            $compra = new \Compra();
            $completo = 1;
            $objproveedores = \ProveedorQuery::create()->filterByIdempresa($idempresa)->orderByProveedorNombrecomercial('asc')->find();
            $objproveedor = new \Proveedor();
            $proveedoresord = array();
            do {
                foreach ($objproveedores as $objproveedor) {
                    foreach ($proveedores as $idproveedor) {
                        if ($objproveedor->getIdproveedor() == $idproveedor) {
                            if (!isset($proveedoresord[$idproveedor])) {
                                $proveedoresord[$idproveedor] = "a";
                                $completo++;
                            }
                        }
                    }
                }
            } while ($completo <= count($proveedores));
            $proveedores = array();
            foreach ($proveedoresord as $key => $value) {
                array_push($proveedores, $key);
            }
            $completo = 1;
            $objalmacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->orderByAlmacenNombre('asc')->find();
            $objalmacen = new \Almacen();
            $almacenesord = array();
            do {
                foreach ($objalmacenes as $objalmacen) {
                    foreach ($almacenes as $idalmacen) {
                        if ($objalmacen->getIdalmacen() == $idalmacen) {
                            if (!isset($almacenesord[$idalmacen])) {
                                $almacenesord[$idalmacen] = "a";
                                $completo++;
                            }
                        }
                    }
                }
            } while ($completo <= count($almacenes));
            $almacenes = array();
            foreach ($almacenesord as $key => $value) {
                array_push($almacenes, $key);
            }
            $totalg = 0;
            foreach ($proveedores as $idproveedor) {
                $nombreProveedor = \ProveedorQuery::create()->findPk($idproveedor)->getProveedorNombrecomercial();
                if ($documento)
                    $reporte[$fila] = array('clave' => '', 'nombre' => $nombreProveedor, 'unidad' => '', 'cantidad' => '', 'cu' => '', 'sub' => '');
                else
                    $reporte[$fila] = "<tr bgcolor='" . $bgproveedor . "'><td>$nombreProveedor</td><td></td><td></td><td></td><td></td><td></td></tr>";
                $fila++;
                $totalp = 0;
                foreach ($almacenes as $idalmacen) {
                    $objcompras = \CompraQuery::create()->filterByIdproveedor($idproveedor)->filterByIdalmacen($idalmacen)->filterByCompraFechacompra(array('min' => $fecha_inicial, 'max' => $fecha_final))->find();
                    $objcompra = new \Compra();
                    $totalc = 0;
                    foreach ($objcompras as $objcompra) {
                        $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($objcompra->getIdcompra())->find();
                        $objcompradetalle = new \Compradetalle();
                        $info = true;
                        $color = true;
                        foreach ($objcomprasdetalles as $objcompradetalle) {
                            foreach ($productos as $idproducto) {
                                if ($objcompradetalle->getIdproducto() == $idproducto) {
                                    if ($info) {
                                        $nombreAlmacen = \AlmacenQuery::create()->findPk($idalmacen)->getAlmacenNombre();
                                        if ($documento)
                                            $reporte[$fila] = array('clave' => '', 'nombre' => $nombreAlmacen, 'unidad' => $objcompra->getCompraFechacompra('Y/m/d'), 'cantidad' => $objcompra->getIdcompra(), 'cu' => '', 'sub' => '');
                                        else
                                            $reporte[$fila] = "<tr bgcolor='" . $bginfo . "'><td> " . $nombreAlmacen . " </td><td> " . $objcompra->getCompraFechacompra('Y/m/d') . " </td><td> " . $objcompra->getIdcompra() . " </td></tr>";
                                        $info = false;
                                        $fila++;
                                    }
                                    $totalc+=$objcompradetalle->getCompradetalleSubtotal();
                                    $totalp+=$objcompradetalle->getCompradetalleSubtotal();
                                    $totalg+=$objcompradetalle->getCompradetalleSubtotal();
                                    $nombreProducto = \ProductoQuery::create()->findPk($idproducto)->getProductoNombre();
                                    $unidadProducto = \ProductoQuery::create()->findPk($idproducto)->getUnidadmedida()->getUnidadmedidaNombre();
                                    $colorbg = ($color) ? $bgfila : $bgfila2;
                                    $color = !$color;
                                    if ($documento)
                                        $reporte[$fila] = array('clave' => $idproducto, 'nombre' => $nombreProducto, 'unidad' => $unidadProducto, 'cantidad' => $objcompradetalle->getCompradetalleCantidad(), 'cu' => $objcompradetalle->getCompradetalleCostounitario(), 'sub' => $objcompradetalle->getCompradetalleSubtotal());
                                    else
                                        $reporte[$fila] = "<tr bgcolor='" . $colorbg . "'><td> " . $idproducto . " </td><td> " . $nombreProducto . " </td><td>$unidadProducto</td><td> " . $objcompradetalle->getCompradetalleCantidad() . " </td><td> " . $objcompradetalle->getCompradetalleCostounitario() . " </td><td> " . $objcompradetalle->getCompradetalleSubtotal() . " </td></tr>";
                                    $fila++;
                                }
                            }
                        }
                        if ($totalc != 0) {
                            if ($documento)
                                $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalc);
                            else
                                $reporte[$fila] = "<tr bgcolor='" . $bgfila . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalc . " </td></tr>";
                            $fila++;
                        }
                    }
                }
                if ($totalp != 0) {
                    if ($documento)
                        $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalp);
                    else
                        $reporte[$fila] = "<tr bgcolor='" . $bgfila . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalp . " </td></tr>";
                    $fila++;
                }
                if ($documento)
                $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => '', 'sub' => '');
            }
            if ($documento)
                $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalg);
            else
                $reporte[$fila] = "<tr bgcolor='" . $bgtotalg . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalg . " </td></tr>";
            $fila++;

            if ($documento) {
                $template = '/entradasporcompras.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . 'application/files/jasper/templates';
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'fecha',
                        'data' => array('inicio' => $post_data["fecha_inicial"], 'fin' => $post_data["fecha_final"]),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render();
                else
                    echo $R->render('excel');
                exit();
            } else {
                $view_model = new ViewModel();
                $view_model->setVariables(array(
                    'reporte' => $reporte,
                    'messages' => $this->flashMessenger(),
                ));
                $view_model->setTemplate('/application/reportes/reportes/entradasporcomprasreporte');
                return $view_model;
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $mes_min = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('m');
        $anio_min = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('Y');
        $mes_max = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('m');
        $anio_max = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('Y');

        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        $proveedores = \ProveedorQuery::create()->filterByIdempresa($idempresa)->find();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->find();
        $form = new \Application\Reportes\Form\EntradasporcomprasForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'productos' => $productos,
            'proveedores' => $proveedores,
            'almacenes' => $almacenes,
            'mes_min' => $mes_min,
            'anio_min' => $anio_min,
            'mes_max' => $mes_max,
            'anio_max' => $anio_max,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/entradasporcompras');
        return $view_model;
    }

}
