<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/DashboardModel.php';

$dashboardModel = new DashboardModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_sede=$data_back->{"id_sede"};
    
    $solicitudTipoSede = $dashboardModel->solicitudTipoSede($id_sede);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $solicitudTS = array("status" => http_response_code(), 'mensaje' => 'ok', "solicitud" => $solicitudTipoSede);
        echo json_encode($solicitudTS);
    } else {
        $solicitudTS = array('status' => http_response_code(), 'error' => 'error', "solicitud" => $solicitudTipoSede);
        echo json_encode($solicitudTS);
    }
}
?>