<?php

include __DIR__ . '/../cors.php';
require_once __DIR__ . '/../model/ServicioModel.php';
require_once __DIR__ . '/../bean/ServicioBean.php';

$objServicioBean = new ServicioBean();
$servicioModel = new ServicioModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cat_servicio = $data_back->{"id_cat_servicio"};

    $objServicioBean->setIdCatServicio($id_cat_servicio);
    $listaServicioCatServicio = $servicioModel->listaServicioPorCatServicio($objServicioBean);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaServicioCatServ = array("status" => http_response_code(), 'mensaje' => 'ok', "servicio" => $listaServicioCatServicio);
        echo json_encode($listaServicioCatServ);
    } else {
        $listaServicioCatServ = array('status' => http_response_code(), 'error' => 'error en el llamado de servicio');
        echo json_encode($listaServicioCatServ);
    }
}
?>