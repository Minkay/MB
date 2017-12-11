<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/MaterialModel.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objMaterialBean = new MaterialBean();
$materialModel = new MaterialModel();

//define nombre de los parametros a usar por json
$id_material = $data_back->{'id_material'};


//setear los valores al objeto
$objMaterialBean->setIdMaterial($id_material);


$eliminarMaterial = $materialModel->eliminaMaterial($objMaterialBean);
header('Content-type: application/json');
if (http_response_code() >= 200 && http_response_code() < 300) {
    if ($eliminarMaterial == true) {
        $eliminaMat = array("status" => 1, "mensaje" => "Material Eliminado Correctamente");
    } else {
        $eliminaMat = array("status" => 0, "mensaje" => "Error al Eliminar, Revise sus datos");
    }

    echo json_encode($eliminaMat);
} else {
    $eliminaMat = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
    echo json_encode($eliminaMat);
}
?>
