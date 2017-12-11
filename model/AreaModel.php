<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/AreaBean.php';

class AreaModel {

    public function listaArea(AreaBean $objab) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objab->getIdArea() == 0 || $objab->getIdArea() == null) {
                $sql = "SELECT * FROM tb_area";
            } else {
                $sql = "SELECT * FROM tb_area WHERE id_area=$objab->idArea";
            }

            $result = mysql_query($sql, $cn);

            $lista= array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push(  $lista, $row);
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

   public function listaAreaPaginado($no_area, $no_descripcion, $nu_pagina, $nu_regis_mostrar){
     try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_area_paginado('$no_area','$no_descripcion',$nu_pagina, $nu_regis_mostrar)";
           
            $result = mysql_query($sql, $cn );

            $lista= array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push(  $lista, $row);
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
    public function insertaArea(AreaBean $objab) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "INSERT INTO tb_area (no_area,no_descripcion)"
                    . " values ('$objab->nomArea','$objab->nomDescripcion')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
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
    }

    public function actualizaArea(AreaBean $objab) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "UPDATE tb_area  SET no_area='$objab->nomArea',no_descripcion='$objab->nomDescripcion' "
                    . "WHERE id_area=$objab->idArea";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
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
    }

    public function eliminaArea(AreaBean $objab) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "DELETE FROM tb_area  WHERE id_area=$objab->idArea";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
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
    }

}

?>