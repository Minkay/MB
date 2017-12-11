<?php

class CatServicioBean {

    public $idCatServicio;
    public $nomCatServicio;
    public $nomDescripcion;
    public $ilEstado;

    function getIdCatServicio() {
        return $this->idCatServicio;
    }

    function getNomCatServicio() {
        return $this->nomCatServicio;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function getIlEstado() {
        return $this->ilEstado;
    }

    function setIdCatServicio($idCatServicio) {
        $this->idCatServicio = $idCatServicio;
    }

    function setNomCatServicio($nomCatServicio) {
        $this->nomCatServicio = $nomCatServicio;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

    function setIlEstado($ilEstado) {
        $this->ilEstado = $ilEstado;
    }

}
