<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../bean/SolicitudBean.php';
require_once __DIR__ . '/../model/SolicitudModel.php';

$objSolicitudBean = new SolicitudBean();
$soliciModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_solicitud = $data_back->{"id_solicitud"};
 
$objSolicitudBean->setIdSolicitud($id_solicitud);

$listaSolicitud = $soliciModel->listaSolicitud($objSolicitudBean );
header('Content-type: application/json');
echo json_encode($listaSolicitud);
?>