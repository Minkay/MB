<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CargoModel.php';
require_once __DIR__ . '/../bean/CargoBean.php';


$objCargoBean = new CargoBean();
$cargoModel = new CargoModel();

$data_back = json_decode(file_get_contents('php://input'));

$no_cargo = $data_back->{"no_cargo"};
$no_area = $data_back->{"no_area"};
$nu_pagina = $data_back->{"nu_pagina"};
$nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};

$listaCargoPag = $cargoModel->listaCargoPaginado($no_cargo,$no_area,$nu_pagina, $nu_regis_mostrar);

header('Content-type: application/json');
echo json_encode($listaCargoPag);
?>
