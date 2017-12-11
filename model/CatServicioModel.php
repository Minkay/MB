<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/CatServicioBean.php';

class CatServicioModel {

    public function listaCatServicio(CatServicioBean $objcsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objcsb->getIdCatServicio() == 0 || $objcsb->getIdCatServicio() == null) {
                $sql = "CALL sp_lista_cat_servicio(null)";
            } else {
                $sql = "CALL sp_lista_cat_servicio($objcsb->idCatServicio)";
            }

            $result = mysql_query($sql, $cn);

            $lista = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function listaCatServicioPaginado($no_cat_servicio, $nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_cat_servicio_paginado('$no_cat_servicio',$nu_pagina, $nu_regis_mostrar)";

            $result = mysql_query($sql, $cn);

            $lista = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function insertaCatServicio(CatServicioBean $objcsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_inserta_cat_servicio('$objcsb->nomCatServicio','$objcsb->nomDescripcion')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result(mysql_query($sql, $cn));
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function actualizaCatServicio(CatServicioBean $objcsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualiza_cat_servicio($objcsb->idCatServicio,'$objcsb->nomCatServicio','$objcsb->nomDescripcion')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result(mysql_query($sql, $cn));
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function eliminaCatServicio(CatServicioBean $objcsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_elimina_cat_servicio($objcsb->idCatServicio,'$objcsb->ilEstado')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result(mysql_query($sql, $cn));
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
