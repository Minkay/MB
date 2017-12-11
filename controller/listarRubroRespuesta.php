<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroRespuestaModel.php';
require_once __DIR__ . '/../bean/RubroRespuestaBean.php';

$objRubroRespuestaBean = new RubroRespuestaBean();
$rubroRespuestaModel = new RubroRespuestaModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_rubro_respuesta = $data_back->{'id_rubro_respuesta'};

    $objRubroRespuestaBean->setIdRubroRespuesta($id_rubro_respuesta);
    
    $listaRubroRespuesta = $rubroRespuestaModel->listaRubroRespuesta($objRubroRespuestaBean);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $ListRubroRes = array("status" => http_response_code(), 'mensaje' => 'ok', "rubro_respuesta" => $listaRubroRespuesta);
        echo json_encode($ListRubroRes);
    } else {
        $ListRubroRes = array('status' => http_response_code(), 'error' => 'error', "rubro_respuesta" => $listaRubroRespuesta);
        echo json_encode($ListRubroRes);
    }
}
?>