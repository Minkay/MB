<?php

class UsuarioBean {

    public $idUsuario;
    public $idRolUsuario;
    public $nomLogin;
    public $nomPassword;
    public $nomNombre;
    public $nomApellido;
    public $nomEmail;
    public $idArea;
    public $idCargo;
    public $nomPiso;
    public $idSede;
    public $nomTelefono;
    public $nomEdad;
    public $nomSexo;
    public $fotoPerfil;
    public $feCreacion;
    public $ilEstado;

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdRolUsuario() {
        return $this->idRolUsuario;
    }

    function getNomLogin() {
        return $this->nomLogin;
    }

    function getNomPassword() {
        return $this->nomPassword;
    }

    function getNomNombre() {
        return $this->nomNombre;
    }

    function getNomApellido() {
        return $this->nomApellido;
    }

    function getNomEmail() {
        return $this->nomEmail;
    }

    function getIdArea() {
        return $this->idArea;
    }

    function getIdCargo() {
        return $this->idCargo;
    }

    function getNomPiso() {
        return $this->nomPiso;
    }

    function getIdSede() {
        return $this->idSede;
    }

    function getNomTelefono() {
        return $this->nomTelefono;
    }

    function getNomEdad() {
        return $this->nomEdad;
    }

    function getNomSexo() {
        return $this->nomSexo;
    }

    function getFotoPerfil() {
        return $this->fotoPerfil;
    }

    function getFeCreacion() {
        return $this->feCreacion;
    }

    function getIlEstado() {
        return $this->ilEstado;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdRolUsuario($idRolUsuario) {
        $this->idRolUsuario = $idRolUsuario;
    }

    function setNomLogin($nomLogin) {
        $this->nomLogin = $nomLogin;
    }

    function setNomPassword($nomPassword) {
        $this->nomPassword = $nomPassword;
    }

    function setNomNombre($nomNombre) {
        $this->nomNombre = $nomNombre;
    }

    function setNomApellido($nomApellido) {
        $this->nomApellido = $nomApellido;
    }

    function setNomEmail($nomEmail) {
        $this->nomEmail = $nomEmail;
    }

    function setIdArea($idArea) {
        $this->idArea = $idArea;
    }

    function setIdCargo($idCargo) {
        $this->idCargo = $idCargo;
    }

    function setNomPiso($nomPiso) {
        $this->nomPiso = $nomPiso;
    }

    function setIdSede($idSede) {
        $this->idSede = $idSede;
    }

    function setNomTelefono($nomTelefono) {
        $this->nomTelefono = $nomTelefono;
    }

    function setNomEdad($nomEdad) {
        $this->nomEdad = $nomEdad;
    }

    function setNomSexo($nomSexo) {
        $this->nomSexo = $nomSexo;
    }

    function setFotoPerfil($fotoPerfil) {
        $this->fotoPerfil = $fotoPerfil;
    }

    function setFeCreacion($feCreacion) {
        $this->feCreacion = $feCreacion;
    }

    function setIlEstado($ilEstado) {
        $this->ilEstado = $ilEstado;
    }

}
