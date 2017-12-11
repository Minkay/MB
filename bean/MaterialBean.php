<?php

/**
 * MaterialBean
 */
class MaterialBean {

    public $idMaterial;
    public $idArea;
    public $idRubro;
    public $nomMaterial;
    public $vaCosto;
    public $coCodigo;
    public $nomDescripcion;

    function getIdMaterial() {
        return $this->idMaterial;
    }

    function getIdArea() {
        return $this->idArea;
    }

    function getIdRubro() {
        return $this->idRubro;
    }

    function getNomMaterial() {
        return $this->nomMaterial;
    }

    function getVaCosto() {
        return $this->vaCosto;
    }

    function getCoCodigo() {
        return $this->coCodigo;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function setIdMaterial($idMaterial) {
        $this->idMaterial = $idMaterial;
    }

    function setIdArea($idArea) {
        $this->idArea = $idArea;
    }

    function setIdRubro($idRubro) {
        $this->idRubro = $idRubro;
    }

    function setNomMaterial($nomMaterial) {
        $this->nomMaterial = $nomMaterial;
    }

    function setVaCosto($vaCosto) {
        $this->vaCosto = $vaCosto;
    }

    function setCoCodigo($coCodigo) {
        $this->coCodigo = $coCodigo;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

}
