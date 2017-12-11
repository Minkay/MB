<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/DashboardModel.php';

$dashboardModel = new DashboardModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    $listaSolSexoRubro = $dashboardModel->solicitudesSexoRubro();

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        
       $listaSolSR = array("status" => http_response_code(), 'mensaje' => 'ok', "solicitud" => $listaSolSexoRubro);
        echo json_encode($listaSolSR);
    } else {
        $listaSolSR = array('status' => http_response_code(), 'error' => 'error', "solicitud" => $listaSolSexoRubro);
        echo json_encode($listaSolSR);
    }
}
?>