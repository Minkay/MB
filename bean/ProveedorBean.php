<?php

class ProveedorBean {

    public $idProveedor;
    public $nomRuc;
    public $nomProveedor;
    public $nomTelefono;
    public $nomCelular;
    public $nomEmail;
    public $nomDireccion;
    public $nomDescripcion;
    public $ilEstado;

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getNomRuc() {
        return $this->nomRuc;
    }

    function getNomProveedor() {
        return $this->nomProveedor;
    }

    function getNomTelefono() {
        return $this->nomTelefono;
    }

    function getNomCelular() {
        return $this->nomCelular;
    }

    function getNomEmail() {
        return $this->nomEmail;
    }

    function getNomDireccion() {
        return $this->nomDireccion;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function getIlEstado() {
        return $this->ilEstado;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setNomRuc($nomRuc) {
        $this->nomRuc = $nomRuc;
    }

    function setNomProveedor($nomProveedor) {
        $this->nomProveedor = $nomProveedor;
    }

    function setNomTelefono($nomTelefono) {
        $this->nomTelefono = $nomTelefono;
    }

    function setNomCelular($nomCelular) {
        $this->nomCelular = $nomCelular;
    }

    function setNomEmail($nomEmail) {
        $this->nomEmail = $nomEmail;
    }

    function setNomDireccion($nomDireccion) {
        $this->nomDireccion = $nomDireccion;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

    function setIlEstado($ilEstado) {
        $this->ilEstado = $ilEstado;
    }

}
