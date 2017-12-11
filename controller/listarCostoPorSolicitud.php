<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CostoModel.php';
require_once __DIR__ . '/../bean/CostoBean.php';

$objCostoBean = new CostoBean();
$costoModel = new CostoModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_solicitud = $data_back->{"id_solicitud"};
    
    $objCostoBean->setIdSolicitud($id_solicitud);   
     

    $listaCostoSolicitud = $costoModel->listaCostoPorSolicitud($objCostoBean);

    header('Content-type: application/json');
    echo json_encode($listaCostoSolicitud);
}
?>