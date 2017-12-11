<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/SolicitudModel.php';
require_once __DIR__ . '/../bean/SolicitudBean.php';

$objSolicitudBean = new SolicitudBean();
$solicitudModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_solicitud=$data_back->{'id_solicitud'};
//$no_solicitud=$data_back->{'no_solicitud'};
//$no_descripcion=$data_back->{'no_descripcion'};
//$img_solicitud=$data_back->{'img_solicitud'};
//$id_usuario=$data_back->{'id_usuario'};
$id_respuesta=$data_back->{'id_respuesta'};
$id_costo=$data_back->{'id_costo'};

$objSolicitudBean->setIdSolicitud($id_solicitud);
$objSolicitudBean->setIdRespuesta($id_respuesta);
$objSolicitudBean->setIdCosto($id_costo);

$actualizaSol=$solicitudModel->actualizaSolicitud($objSolicitudBean);
header('Content-type: application/json');
echo json_encode($actualizaSol);