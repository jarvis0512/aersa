<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function mensualAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        //INTANCIAMOS NUESTRA VISTA
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Flujoefectivo\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/reportes/mensual');
        return $view_model;
    }

    public function reportemAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $mes = $this->params()->fromQuery('mes');
        $ano = $this->params()->fromQuery('ano');
        $added = array();
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->find();
        $compra = new \Compra();
        $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->find();
        $flujoefectivo = new \Flujoefectivo();
        foreach ($flujosefectivos as $flujoefectivo) {
            $adding = true;
            $idcompra = $flujoefectivo->getIdcompra();
            $com=  \CompraQuery::create()->filterByIdcompra($idcompra)->find();
            $a=true;
            foreach ($com as $com2) {
                if($com2->getCompraEstatuspago()!="pagada")
                    $a=false;
            }
            if($a) {
                foreach ($added as $add) {
                    if ($idcompra == $add)
                        $adding = false;
                }
                if ($adding) {
                    $flujos = \FlujoefectivoQuery::create()->filterByIdcompra($idcompra)->find();
                    $flujo = new \Flujoefectivo();
                    $band = true;
                    foreach ($flujos as $flujo) {
                        $fecha = $ano . '-' . $mes;
                        $string = $flujo->getFlujoefectivoFecha();
                        if ((substr($string, 0, strlen($fecha))) != $fecha)
                            $band = false;
                    }
                    if ($band) {
                        array_push($added, $idcompra);
                        $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                        $compradetalle = new \Compradetalle();
                        foreach ($comprasdetalles as $compradetalle) {
                            $key = $compradetalle->getProducto()->getIdcategoria();
                            $value = $compradetalle->getCompradetalleSubtotal();
                            //echo $compradetalle->getIdcompradetalle()." precio ".$compradetalle->getCompradetalleSubtotal()." cat ".$compradetalle->getProducto()->getIdcategoria()." | ";
                            if (isset($reporte[$key])) {
                                $reporte[$key] = $value + $reporte[$key];
                            } else {
                                $reporte[$key] = $value;
                            }
                        }
                    }
                }
            }
        }
//        foreach ($compras as $compra) {
//            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
//            $compradetalle = new \Compradetalle();
//            foreach ($comprasdetalles as $compradetalle) {
//                $key = $compradetalle->getProducto()->getIdcategoria();
//                $value = $compradetalle->getCompradetalleSubtotal();
//                //echo $compradetalle->getIdcompradetalle()." precio ".$compradetalle->getCompradetalleSubtotal()." cat ".$compradetalle->getProducto()->getIdcategoria()." | ";
//                if (isset($reporte[$key])) {
//                    $reporte[$key] = $value + $reporte[$key];
//                } else {
//                    $reporte[$key] = $value;
//                }
//            }
//        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $reporteg = array();
        $totalg = 0;
        foreach ($reporte as $report) {
            $totalg+=$report;
        }
        foreach ($categorias as $categoria) {
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = 0;
            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                if (isset($reporte[$subcategoria->getIdcategoria()])) {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = $reporte[$subcategoria->getIdcategoria()];
                    $reporteg[$subcategoria->getCategoriaNombre()][1] = ($reporte[$subcategoria->getIdcategoria()] * 100) / $totalg;
                    $total+=$reporte[$subcategoria->getIdcategoria()];
                } else {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = 0;
                }
            }
            if (isset($reporte[$categoria->getIdcategoria()])) {
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][0] = $reporte[$categoria->getIdcategoria()];
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][1] = ($reporte[$categoria->getIdcategoria()] * 100) / $totalg;
                $total += $reporte[$categoria->getIdcategoria()];
            }
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = $total;
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][1] = ($total * 100) / $totalg;
        }

        //$flujoefectivo = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->filterByFlujoefectivoFecha(array('min' => $ano.'-'.$mes.'-01 00:00:00','max' => $ano.'-'.$mes.'-31 23:59:59'))->find();
        return $this->getResponse()->setContent(json_encode($reporteg));
    }

    public function anualAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        //INTANCIAMOS NUESTRA VISTA
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Flujoefectivo\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/reportes/anual');
        return $view_model;
    }
    
    public function reporteaAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $ano = $this->params()->fromQuery('ano');
        $added = array();
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano . '-01-01 00:00:00', 'max' => $ano . '-12-31 23:59:59'))->find();
        $compra = new \Compra();
        $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-01-01 00:00:00', 'max' => $ano . '-12-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->find();
        $flujoefectivo = new \Flujoefectivo();
        foreach ($flujosefectivos as $flujoefectivo) {
            $adding = true;
            $idcompra = $flujoefectivo->getIdcompra();
            $com=  \CompraQuery::create()->filterByIdcompra($idcompra)->find();
            $a=true;
            foreach ($com as $com2) {
                if($com2->getCompraEstatuspago()!="pagada")
                    $a=false;
            }
            if($a) {
                foreach ($added as $add) {
                    if ($idcompra == $add)
                        $adding = false;
                }
                if ($adding) {
                    $flujos = \FlujoefectivoQuery::create()->filterByIdcompra($idcompra)->find();
                    $flujo = new \Flujoefectivo();
                    $band = true;
                    foreach ($flujos as $flujo) {
                        $fecha = $ano . '-' . $mes;
                        $string = $flujo->getFlujoefectivoFecha();
                        if ((substr($string, 0, strlen($fecha))) != $fecha)
                            $band = false;
                    }
                    if ($band) {
                        array_push($added, $idcompra);
                        $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                        $compradetalle = new \Compradetalle();
                        foreach ($comprasdetalles as $compradetalle) {
                            $key = $compradetalle->getProducto()->getIdcategoria();
                            $value = $compradetalle->getCompradetalleSubtotal();
                            if (isset($reporte[$key])) {
                                $reporte[$key] = $value + $reporte[$key];
                            } else {
                                $reporte[$key] = $value;
                            }
                        }
                    }
                }
            }
        }

        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $reporteg = array();
        $totalg = 0;
        foreach ($reporte as $report) {
            $totalg+=$report;
        }
        foreach ($categorias as $categoria) {
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = 0;
            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                if (isset($reporte[$subcategoria->getIdcategoria()])) {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = $reporte[$subcategoria->getIdcategoria()];
                    $reporteg[$subcategoria->getCategoriaNombre()][1] = ($reporte[$subcategoria->getIdcategoria()] * 100) / $totalg;
                    $total+=$reporte[$subcategoria->getIdcategoria()];
                } else {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = 0;
                }
            }
            if (isset($reporte[$categoria->getIdcategoria()])) {
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][0] = $reporte[$categoria->getIdcategoria()];
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][1] = ($reporte[$categoria->getIdcategoria()] * 100) / $totalg;
                $total += $reporte[$categoria->getIdcategoria()];
            }
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = $total;
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][1] = ($total * 100) / $totalg;
        }

        return $this->getResponse()->setContent(json_encode($reporteg));
    }

}