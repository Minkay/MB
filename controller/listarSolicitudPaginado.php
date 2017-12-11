<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../bean/SolicitudBean.php';
require_once __DIR__ . '/../model/SolicitudModel.php';

$objSolicitudBean = new SolicitudBean();
$soliciModel = new SolicitudModel();

$data_back = json_decode(file_get_contents('php://input'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id_rol_usuario = $data_back->{"id_rol_usuario"};
    $id_usuario = $data_back->{"id_usuario"};
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};
    $no_nombre = $data_back->{"no_nombre"};
    $no_area = $data_back->{"no_area"};
    $no_piso = $data_back->{"no_piso"};
    $no_sede = $data_back->{"no_sede"};
    $no_solicitud = $data_back->{"no_solicitud"};
    $no_descripcion = $data_back->{"no_descripcion"};
    $il_solicitud = $data_back->{"il_solicitud"};



    $listaSolicitudPaginado = $soliciModel->listaSolicitudPaginado($id_rol_usuario,$id_usuario,$nu_pagina, $nu_regis_mostrar, $no_nombre, $no_area, $no_piso, $no_sede, $no_solicitud, $no_descripcion, $il_solicitud);
    header('Content-type: application/json');
    echo json_encode($listaSolicitudPaginado);
}
?>