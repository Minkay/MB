<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/RespuestaSolicitudModel.php';
require_once __DIR__ . '/../bean/RespuestaSolicitudBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objRespuestaSolicitudBean = new RespuestaSolicitudBean();
$respuestaSolicitudModel = new RespuestaSolicitudModel();

//define nombre de los parametros a usar por json
$id_solicitud = $data_back->{'id_solicitud'};
 

//setear los valores al objeto
$objRespuestaSolicitudBean->setIdSolicitud($id_solicitud);
 

//ejecutar la funcion
$listaRespuestaSolicitudPorSolicitud = $respuestaSolicitudModel->listaRespuestaSolicitudPorSolicitud($objRespuestaSolicitudBean);

header('Content-type: application/json');
echo json_encode($listaRespuestaSolicitudPorSolicitud);
?>