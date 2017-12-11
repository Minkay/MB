<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/DashboardModel.php';

$dashboardModel = new DashboardModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $solicitudMesRubro = $dashboardModel->solicitudMesRubro();

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $solicitudMesRu = array("status" => http_response_code(), 'mensaje' => 'ok', "solicitud" => $solicitudMesRubro);
        echo json_encode($solicitudMesRu);
    } else {
        $solicitudMesRu = array('status' => http_response_code(), 'error' => 'error', "solicitud" => $solicitudMesRubro);
        echo json_encode($solicitudMesRu);
    }
}
?>