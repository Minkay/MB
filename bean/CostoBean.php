<?php

/**
 * CostoBean
 */
class CostoBean {

    public $idCosto;
    public $idSolicitud;
    public $ilTipo;
    public $idEjecutor;
    public $idRubro;
    public $idMaterial;
    public $idCatServicio;
    public $idServicio;
    public $idSede;
    public $numCantidad;
    public $vaCostoUnitario;
    public $vaCostoServicio;
    public $feFechaCosto;

    function getIdCosto() {
        return $this->idCosto;
    }

    function getIdSolicitud() {
        return $this->idSolicitud;
    }

    function getIlTipo() {
        return $this->ilTipo;
    }

    function getIdEjecutor() {
        return $this->idEjecutor;
    }

    function getIdRubro() {
        return $this->idRubro;
    }

    function getIdMaterial() {
        return $this->idMaterial;
    }

    function getIdCatServicio() {
        return $this->idCatServicio;
    }

    function getIdServicio() {
        return $this->idServicio;
    }

    function getIdSede() {
        return $this->idSede;
    }

    function getNumCantidad() {
        return $this->numCantidad;
    }

    function getVaCostoUnitario() {
        return $this->vaCostoUnitario;
    }

    function getVaCostoServicio() {
        return $this->vaCostoServicio;
    }

    function getFeFechaCosto() {
        return $this->feFechaCosto;
    }

    function setIdCosto($idCosto) {
        $this->idCosto = $idCosto;
    }

    function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    function setIlTipo($ilTipo) {
        $this->ilTipo = $ilTipo;
    }

    function setIdEjecutor($idEjecutor) {
        $this->idEjecutor = $idEjecutor;
    }

    function setIdRubro($idRubro) {
        $this->idRubro = $idRubro;
        if ($idRubro == null) {
            $this->idRubro = 0;
        }
    }

    function setIdMaterial($idMaterial) {
        $this->idMaterial = $idMaterial;
        if ($idMaterial == null) {
            $this->idMaterial = 0;
        }
    }

    function setIdCatServicio($idCatServicio) {
        $this->idCatServicio = $idCatServicio;
        if ($idCatServicio == null) {
            $this->idCatServicio = 0;
        }
    }

    function setIdServicio($idServicio) {
        $this->idServicio = $idServicio;
        if ($idServicio == null) {
            $this->idServicio = 0;
        }
    }

    function setIdSede($idSede) {
        $this->idSede = $idSede;
        if ($idSede == null) {
            $this->idSede = 0;
        }
    }

    function setNumCantidad($numCantidad) {
        $this->numCantidad = $numCantidad;
    }

    function setVaCostoUnitario($vaCostoUnitario) {
        $this->vaCostoUnitario = $vaCostoUnitario;
    }

    function setVaCostoServicio($vaCostoServicio) {
        $this->vaCostoServicio = $vaCostoServicio;
    }

    function setFeFechaCosto($feFechaCosto) {
        $this->feFechaCosto = $feFechaCosto;
    }

}
