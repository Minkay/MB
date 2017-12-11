<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../bean/SolicitudBean.php';
require_once __DIR__ . '/../model/SolicitudModel.php';

$objSolicitudBean = new SolicitudBean();
$soliciModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//$id_solicitud = $data_back->{"id_solicitud"};

    $id_rol_usuario = $data_back->{'id_rol_usuario'};
    $id_usuario = $data_back->{'id_usuario'};

    $listaSolicitudNotifi = $soliciModel->listaSolicitudPendiente($objSolicitudBean, $id_rol_usuario, $id_usuario);
    header('Content-type: application/json');
    echo json_encode($listaSolicitudNotifi);
}
?>