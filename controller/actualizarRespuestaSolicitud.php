<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/RespuestaSolicitudModel.php';
require_once __DIR__ . '/../bean/RespuestaSolicitudBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objRespuestaSolicitudBean = new RespuestaSolicitudBean();
$respuestaSolicitudModel = new RespuestaSolicitudModel();

//define nombre de los parametros a usar por json
$id_respuesta = $data_back->{'id_respuesta'};
$no_prioridad = $data_back->{'no_prioridad'};
$no_tiempo_respuesta = $data_back->{'no_tiempo_respuesta'};
$id_area = $data_back->{'id_area'};
$id_cargo = $data_back->{'id_cargo'};

//setear los valores al objeto
$objRespuestaSolicitudBean->setIdRespuesta($id_respuesta);
$objRespuestaSolicitudBean->setNomPrioridad($no_prioridad);
$objRespuestaSolicitudBean->setNomTiempoRespuesta($no_tiempo_respuesta);
$objRespuestaSolicitudBean->setIdArea($id_area);
$objRespuestaSolicitudBean->setIdCargo($id_cargo);

//ejecutar la funcion
$actualizaRespuestaSolicitud = $respuestaSolicitudModel->actualizaRespuestaSolicitud($objRespuestaSolicitudBean);

header('Content-type: application/json');
echo json_encode($actualizaRespuestaSolicitud);
?>
