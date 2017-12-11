<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroModel.php';
require_once __DIR__ . '/../bean/RubroBean.php';

$objRubroBean = new RubroBean();
$rubroModel = new RubroModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_rubro = $data_back->{"no_rubro"};
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};


    $listaRubroPaginado = $rubroModel->listaRubroPaginado($no_rubro, $nu_pagina, $nu_regis_mostrar);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $ListRubroPag = array("status" => http_response_code(), 'mensaje' => 'ok', "rubro" => $listaRubroPaginado);
        echo json_encode($ListRubroPag);
    } else {
        $ListRubroPag = array('status' => http_response_code(), 'error' => 'error', "rubro" => $listaRubroPaginado);
        echo json_encode($ListRubroPag);
    }
}
?>