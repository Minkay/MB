<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/ServicioBean.php';

class ServicioModel {

    public function listaServicio(ServicioBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objsb->getIdServicio() == 0 || $objsb->getIdServicio() == null) {
                $sql = "CALL sp_lista_servicio(null)";
            } else {
                $sql = "CALL sp_lista_servicio($objsb->idServicio)";
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

    public function listaServicioPaginado($no_servicio, $no_cat_servicio, $nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_servicio_paginado('$no_servicio','$no_cat_servicio',$nu_pagina, $nu_regis_mostrar)";

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

    public function listaServicioPorCatServicio(ServicioBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_servicio_por_cat_servicio($objsb->idCatServicio)";
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

    public function insertaServicio(ServicioBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_inserta_servicio($objsb->idCatServicio,'$objsb->nomServicio','$objsb->nomDescripcion','$objsb->vaPrecio','$objsb->coCodigo')";
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

    public function actualizaServicio(ServicioBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualiza_servicio($objsb->idServicio,$objsb->idCatServicio,'$objsb->nomServicio','$objsb->nomDescripcion','$objsb->vaPrecio','$objsb->coCodigo')";
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

    public function eliminaServicio(ServicioBean $objsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_elimina_servicio($objsb->idServicio)";
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
