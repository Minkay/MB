<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroModel.php';
require_once __DIR__ . '/../bean/RubroBean.php';

$objRubroBean = new RubroBean();
$rubroModel = new RubroModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_back = json_decode(file_get_contents('php://input'));


//define nombre de los parametros a usar por json

    $no_rubro = $data_back->{'no_rubro'};
    $no_descripcion = $data_back->{'no_descripcion'};

//setear los valores al objeto
    $objRubroBean->setNomRubro($no_rubro);
    $objRubroBean->setNomDescripcion($no_descripcion);


    $insertaRubro = $rubroModel->insertaRubro($objRubroBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($insertaRubro == true) {
            $insertaRub = array("status" => 1, "mensaje" => "Rubro Insertado Correctamente");
        } else {
            $insertaRub = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($insertaRub);
    } else {
        $insertaRub = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($insertaRub);
    }
}
?>
