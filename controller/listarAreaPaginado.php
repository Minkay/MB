<?php

include __DIR__ . '/../cors.php';


require_once __DIR__ . '/../model/AreaModel.php';
require_once __DIR__ . '/../bean/AreaBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objAreaBean = new AreaBean();
$areaModel = new AreaModel();

$no_area = $data_back->{"no_area"};
$no_descripcion = $data_back->{"no_descripcion"};
$nu_pagina = $data_back->{"nu_pagina"};
$nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};



$listaAreaPaginado = $areaModel->listaAreaPaginado($no_area, $no_descripcion, $nu_pagina, $nu_regis_mostrar);

header('Content-type: application/json');


if (http_response_code() == 200) {

    $arrayName = array("status" => http_response_code(), 'mensaje' => 'ok', "area" => $listaAreaPaginado);
    echo json_encode($arrayName);
} else {
    $arrayName = array('status' => http_response_code(), 'error' => 'error', "area" => $listaAreaPaginado);
    echo json_encode($arrayName);
}
?>