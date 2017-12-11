<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $data_back = json_decode(file_get_contents('php://input'));

    $no_responsable = $data_back->{"no_responsable"};
    $buscador = $data_back->{"buscador"};

    $listaResponsable = $usuarioModel->listaResponsableSolicitud($no_responsable, $buscador);
    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaRespons = array("status" => http_response_code(), 'mensaje' => 'ok', "responsable" => $listaResponsable);
        echo json_encode($listaRespons);
    } else {
        $listaRespons = array('status' => http_response_code(), 'mensaje' => 'error en el servicio', "responsable" => $listaResponsable);
        echo json_encode($listaRespons);
    }
}
?>