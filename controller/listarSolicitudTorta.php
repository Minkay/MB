<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/DashboardModel.php';

$dashboardModel = new DashboardModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre_filtro = $data_back->{"nombre_filtro"};

    $listaSolTorta = $dashboardModel->solicitudesTorta($nombre_filtro);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaSolTor = array("status" => http_response_code(), 'mensaje' => 'ok', "solicitud" => $listaSolTorta);
        echo json_encode($listaSolTor);
    } else {
        $listaSolTor = array('status' => http_response_code(), 'error' => 'error', "solicitud" => $listaSolTorta);
        echo json_encode($listaSolTor);
    }
}
?>