<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/HistorialSolicitudModel.php';
require_once __DIR__ . '/../bean/HistorialSolicitudBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objHistBe = new HistorialSolicitudBean();
$histModel = new HistorialSolicitudModel();

/* datos recibidos de  json */
$id_solicitud = $data_back->{"id_solicitud"};
// $no_respuesta_solicitud = $data_back->{"no_respuesta_solicitud"};
// $img_sol_respuesta = $data_back->{"img_sol_respuesta"};

/* setear data en el objeto */
$objHistBe->setIdSolicitud($id_solicitud);
// $objHistBe->setNomRespuestaSolicitud($no_respuesta_solicitud);
// $objHistBe->setImgSolicitudRespuesta($img_sol_respuesta);



$listaHist = $histModel->listaHistorialSolicitud($objHistBe);

header('Content-type: application/json');
echo json_encode($listaHist);
?>