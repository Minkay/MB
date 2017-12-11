<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroRespuestaModel.php';
//require_once __DIR__ . '/../bean/RubroRespuestaBean.php';
//$objRubroRespuestaBean = new RubroRespuestaBean();
$rubroRespuestaModel = new RubroRespuestaModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $no_rubro_respuesta = $data_back->{'no_rubro_respuesta'};
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};


    $listaRubroRespuestaPaginado = $rubroRespuestaModel->listaRubroRespuestaPaginado($no_rubro_respuesta, $nu_pagina, $nu_regis_mostrar);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listRubroResPag = array("status" => http_response_code(), 'mensaje' => 'ok', "rubro_respuesta" => $listaRubroRespuestaPaginado);
        echo json_encode($listRubroResPag);
    } else {
        $listRubroResPag = array('status' => http_response_code(), 'error' => 'error', "rubro_respuesta" => $listaRubroRespuestaPaginado);
        echo json_encode($listRubroResPag);
    }
}
?>