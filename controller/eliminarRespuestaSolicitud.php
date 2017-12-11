<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/RespuestaSolicitudModel.php';
require_once __DIR__ . '/../bean/RespuestaSolicitudBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objRespuestaSolicitudBean = new RespuestaSolicitudBean();
$respuestaSolicitudModel = new RespuestaSolicitudModel();

//define nombre de los parametros a usar por json
$id_respuesta = $data_back->{'id_respuesta'};
 

//setear los valores al objeto
$objRespuestaSolicitudBean->setIdRespuesta($id_respuesta);
 

//ejecutar la funcion
$eliminaRespuestaSolicitud = $respuestaSolicitudModel->eliminaRespuestaSolicitud($objRespuestaSolicitudBean);

header('Content-type: application/json');
echo json_encode($eliminaRespuestaSolicitud);
?>
