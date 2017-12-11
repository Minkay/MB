<?php

include __DIR__ . '/../cors.php';
require_once __DIR__ . '/../model/ServicioModel.php';
require_once __DIR__ . '/../bean/ServicioBean.php';

$objServicioBean = new ServicioBean();
$servicioModel = new ServicioModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_servicio = $data_back->{"id_servicio"};

    $objServicioBean->setIdServicio($id_servicio);
    $listaservicio = $servicioModel->listaServicio($objServicioBean);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaservice = array("status" => http_response_code(), 'mensaje' => 'ok', "servicio" => $listaservicio);
        echo json_encode($listaservice);
    } else {
        $listaservice = array('status' => http_response_code(), 'error' => 'error en el llamado de servicio');
        echo json_encode($listaservice);
    }
}
?>