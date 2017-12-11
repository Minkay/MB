<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RespuestaSolicitudModel.php';
require_once __DIR__ . '/../bean/RespuestaSolicitudBean.php';

$objRespuestaSolicitudBean = new RespuestaSolicitudBean();
$respuestaSolicitudModel = new RespuestaSolicitudModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data_back = json_decode(file_get_contents('php://input'));
//define nombre de los parametros a usar por json
    $id_solicitud = $data_back->{'id_solicitud'};
    $no_prioridad = $data_back->{'no_prioridad'};
    $no_tiempo_respuesta = $data_back->{'no_tiempo_respuesta'};
    $id_rubro = $data_back->{'id_rubro'};
    $no_responsable = $data_back->{'no_responsable'};
    $id_responsable = $data_back->{'id_responsable'};
    $il_tipo_mantenimiento = $data_back->{'il_tipo_mantenimiento'};
    $no_comentario = $data_back->{'no_comentario'};
    $img_respuesta_solicitud = $data_back->{'img_respuesta_solicitud'};


//setear los valores al objeto
    $objRespuestaSolicitudBean->setIdSolicitud($id_solicitud);
    $objRespuestaSolicitudBean->setNomPrioridad($no_prioridad);
    $objRespuestaSolicitudBean->setNomTiempoRespuesta($no_tiempo_respuesta);
    $objRespuestaSolicitudBean->setIdRubro($id_rubro);
    $objRespuestaSolicitudBean->setNomResponsable($no_responsable);
    $objRespuestaSolicitudBean->setIdResponsable($id_responsable);
    $objRespuestaSolicitudBean->setIlTipoMantenimiento($il_tipo_mantenimiento);
    $objRespuestaSolicitudBean->setNomComentario($no_comentario);
    $objRespuestaSolicitudBean->setImgRespuestaSolicitud($img_respuesta_solicitud);


//ejecutar la funcion
    $insertaRespuestaSolicitud = $respuestaSolicitudModel->insertaRespuestaSolicitud($objRespuestaSolicitudBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($insertaRespuestaSolicitud == true) {
            $insertaRptaSol = array("status" => 1, "mensaje" => "Respuesta Enviada Correctamente");
        } else {
            $insertaRptaSol = array("status" => 0, "mensaje" => "Error al enviar Respuesta Revise sus datos");
        }

        echo json_encode($insertaRptaSol);
    } else {
        $insertaRptaSol = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($insertaRptaSol);
    }
}
?>
