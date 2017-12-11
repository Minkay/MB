<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/DashboardModel.php';

$dashboardModel = new DashboardModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $listaCantPorDia = $dashboardModel->solicitudesPorDia();

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaCantPorD = array("status" => http_response_code(), 'mensaje' => 'ok', "solicitud" => $listaCantPorDia);
        echo json_encode($listaCantPorD);
    } else {
        $listaCantPorD = array('status' => http_response_code(), 'error' => 'error', "solicitud" => $listaCantPorDia);
        echo json_encode($listaCantPorD);
    }
}
?>