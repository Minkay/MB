<?php

class ServicioBean {

    public $idServicio;
    public $idCatServicio;
    public $nomServicio;
    public $nomDescripcion;
    public $vaPrecio;
    public $coCodigo;

    function getIdServicio() {
        return $this->idServicio;
    }

    function getIdCatServicio() {
        return $this->idCatServicio;
    }

    function getNomServicio() {
        return $this->nomServicio;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function getVaPrecio() {
        return $this->vaPrecio;
    }

    function getCoCodigo() {
        return $this->coCodigo;
    }

    function setIdServicio($idServicio) {
        $this->idServicio = $idServicio;
    }

    function setIdCatServicio($idCatServicio) {
        $this->idCatServicio = $idCatServicio;
    }

    function setNomServicio($nomServicio) {
        $this->nomServicio = $nomServicio;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

    function setVaPrecio($vaPrecio) {
        $this->vaPrecio = $vaPrecio;
    }

    function setCoCodigo($coCodigo) {
        $this->coCodigo = $coCodigo;
    }

}
