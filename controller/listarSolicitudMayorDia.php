<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../bean/SolicitudBean.php';
require_once __DIR__ . '/../model/SolicitudModel.php';

$objSolicitudBean = new SolicitudBean();
$soliciModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    $listaSolicitudMayorDia = $soliciModel->listaSolicitudMayorDia();
    header('Content-type: application/json');
    echo json_encode($listaSolicitudMayorDia);
}
?>