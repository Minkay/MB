<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/SedeBean.php';

class SedeModel {

    public function listaSede(SedeBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "SELECT * FROM tb_sede";
            $result = mysql_query($sql, $cn);
            $lista['sede'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['sede'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
        return $lista;
    }
}

?>