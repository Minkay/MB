<?php

require_once __DIR__ . '/../util/ConexionBD.php';

class ReporteModel {

    public function reporte() {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "SELECT * FROM tb_materiales";

            $resultado = mysql_query($sql, $cn)or die(mysql_error());
            $registros = mysql_num_rows($resultado);

            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $registros;
    }

}
