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


    $eliminaServicio = $servicioModel->eliminaServicio($objServicioBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaServicio == true) {
            $eliminaService = array("status" => 1, "mensaje" => "Servicio Eliminado Correctamente");
        } else {
            $eliminaService = array("status" => 0, "mensaje" => "Error al Eliminar, Revise sus datos");
        }
        echo json_encode($eliminaService);
    } else {
        $eliminaService = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaService);
    }
}
?>