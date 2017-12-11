<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/CargoBean.php';
/*
 * CargoBean
 */

class CargoModel {

    public function listaCargo(CargoBean $objcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objcb->getIdCargo() != null || $objcb->getIdCargo() != 0) {
                $sql = "SELECT id_cargo, tb_a.id_area, no_cargo, tb_a.no_area, tb_c.no_descripcion FROM tb_cargo tb_c 
INNER JOIN tb_area tb_a on tb_a.id_area=tb_c.id_area WHERE id_cargo= $objcb->idCargo";
            } else {
                $sql = "SELECT id_cargo, tb_a.id_area, no_cargo, tb_a.no_area, tb_c.no_descripcion FROM tb_cargo tb_c 
INNER JOIN tb_area tb_a on tb_a.id_area=tb_c.id_area";
            }
            $result = mysql_query($sql, $cn);
            $lista['cargo'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['cargo'], $row);
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

    public function listaCargoPaginado($no_cargo, $no_area, $nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_cargo_paginado('$no_cargo','$no_area',$nu_pagina, $nu_regis_mostrar)";

            $result = mysql_query($sql, $cn);
            $lista['cargo'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['cargo'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    /**
     * [listaCargoPorArea description]
     * @param  CargoBean $objcb [description]
     * @return [type]           [description]
     */
    public function listaCargoPorArea(CargoBean $objcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "select* from tb_cargo WHERE id_area= $objcb->idArea";

            $result = mysql_query($sql, $cn);
            $lista['cargo'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['cargo'], $row);
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

    /**
     * [insertaCargo description]
     * @param  CargoBean $objcb [description]
     * @return [type]           [description]
     */
    public function insertaCargo(CargoBean $objcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "INSERT INTO  tb_cargo (id_area,no_cargo,no_descripcion) VALUES($objcb->idArea,'$objcb->nomCargo','$objcb->nomDescripcion')";

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

    /**
     * [actualizaCargo description]
     * @param  CargoBean $objcb [actualiza clase cargo]
     * @return [type]           [verdadero o falso]
     */
    public function actualizaCargo(CargoBean $objcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "UPDATE  tb_cargo SET id_area=$objcb->idArea,no_cargo='$objcb->nomCargo',no_descripcion='$objcb->nomDescripcion' WHERE id_cargo= $objcb->idCargo";

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

    public function eliminaCargo(CargoBean $objcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "DELETE FROM  tb_cargo  WHERE id_cargo= $objcb->idCargo";

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
