<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/HistorialSolicitudModel.php';
require_once __DIR__ . '/../bean/HistorialSolicitudBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objHistBe = new HistorialSolicitudBean();
$histModel = new HistorialSolicitudModel();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* datos recibidos de  json */
    $id_solicitud = $data_back->{"id_solicitud"};
    $no_respuesta_solicitud = $data_back->{"no_respuesta_solicitud"};
    $no_comentario = $data_back->{"no_comentario"};
    $img_sol_respuesta = $data_back->{"img_sol_respuesta"};

    /* setear data en el objeto */
    $objHistBe->setIdSolicitud($id_solicitud);
    $objHistBe->setNomRespuestaSolicitud($no_respuesta_solicitud);
    $objHistBe->setNomComentario($no_comentario);
    $objHistBe->setImgSolicitudRespuesta($img_sol_respuesta);

    $insertaHist = $histModel->insertaHistorialSolicitud($objHistBe);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($insertaHist == true) {
            $insertaH = array("status" => 1, "mensaje" => "Estado Insertado Correctamente");
        } else {
            $insertaH = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($insertaH);
    } else {
        $insertaH = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($insertaH);
    }
}
?>