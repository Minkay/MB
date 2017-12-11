<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../bean/SolicitudBean.php';
require_once __DIR__ . '/../model/SolicitudModel.php';

$objSolicitudBean = new SolicitudBean();
$soliciModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //define nombre de los parametros a usar por json
    $id_solicitud = $data_back->{'id_solicitud'};
    //setear los valores al objeto
    $objSolicitudBean->setIdSolicitud($id_solicitud);

    $eliminaSolicitud = $soliciModel->eliminaSolicitud($objSolicitudBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaSolicitud == true) {
            $eliminaSol = array("status" => 1, "mensaje" => "Solicitud Eliminada Correctamente");
        } else {
            $eliminaSol = array("status" => 0, "mensaje" => "Error al Eliminar Revise sus datos");
        }

        echo json_encode($eliminaSol);
    } else {
        $eliminaSol = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaSol);
    }
}
?>
