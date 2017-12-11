<?php

class CargoBean {

    public $idCargo;
    public $idArea;
    public $nomCargo;
    public $nomDescripcion;

    function getIdCargo() {
        return $this->idCargo;
    }

    function getIdArea() {
        return $this->idArea;
    }

    function getNomCargo() {
        return $this->nomCargo;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function setIdCargo($idCargo) {
        $this->idCargo = $idCargo;
    }

    function setIdArea($idArea) {
        $this->idArea = $idArea;
    }

    function setNomCargo($nomCargo) {
        $this->nomCargo = $nomCargo;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

}
