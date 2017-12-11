<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/RolUsuarioBean.php';

class RolUsuarioModel {

    public function listaRolUsuario(RolUsuarioBean $objrub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objrub->getIdRolUsuario() != null || $objrub->getIdRolUsuario() != 0) {
                $sql = "SELECT * FROM tb_rol_usuario WHERE id_rol_usuario=$objrub->idRolUsuario";
            } else {
                $sql = "SELECT * FROM tb_rol_usuario";
            }

            $result = mysql_query($sql, $cn);
            $lista['rolUsuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['rolUsuario'], $row);
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