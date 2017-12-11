<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/MaterialModel.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objMaterialBean = new MaterialBean();
$materialModel = new MaterialModel();

//define nombre de los parametros a usar por json
$id_material = $data_back->{'id_material'};
$id_rubro = $data_back->{'id_rubro'};
$no_material = $data_back->{'no_material'};
$va_costo = $data_back->{'va_costo'};
$co_codigo = $data_back->{'co_codigo'};
$no_descripcion = $data_back->{'no_descripcion'};

//setear los valores al objeto
$objMaterialBean->setIdMaterial($id_material);
$objMaterialBean->setIdRubro($id_rubro);
$objMaterialBean->setNomMaterial($no_material);
$objMaterialBean->setVaCosto($va_costo);
$objMaterialBean->setCoCodigo($co_codigo);
$objMaterialBean->setNomDescripcion($no_descripcion);

$actualizaMaterial = $materialModel->actualizaMaterial($objMaterialBean);
header('Content-type: application/json');
if (http_response_code() >= 200 && http_response_code() < 300) {
    if ($actualizaMaterial == true) {
        $actualizaMat = array("status" => 1, "mensaje" => "Material Actualizado Correctamente");
    } else {
        $actualizaMat = array("status" => 0, "mensaje" => "Error al actualizar, Revise sus datos");
    }

    echo json_encode($actualizaMat);
} else {
    $actualizaMat = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
    echo json_encode($actualizaMat);
}
?>
