<?php

/**
 * AreaBean
 */
class AreaBean {

    public $idArea;
    public $nomArea;
    public $nomDescripcion;

    function getIdArea() {
        return $this->idArea;
    }

    function getNomArea() {
        return $this->nomArea;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function setIdArea($idArea) {
        $this->idArea = $idArea;
    }

    function setNomArea($nomArea) {
        $this->nomArea = $nomArea;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

}

?>