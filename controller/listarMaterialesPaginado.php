<?php

include __DIR__ . '/../cors.php';



require_once __DIR__ . '/../model/MaterialModel.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objMaterialBean = new MaterialBean();
$materialModel = new MaterialModel();

$no_material = $data_back->{"no_material"};
$no_rubro = $data_back->{"no_rubro"};
$co_codigo = $data_back->{"co_codigo"};
$nu_pagina = $data_back->{"nu_pagina"};
$nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};


$listaMaterialPaginado = $materialModel->listaMaterialPaginado($no_material,$no_rubro,$co_codigo,$nu_pagina, $nu_regis_mostrar);

header('Content-type: application/json');
echo json_encode($listaMaterialPaginado);
?>