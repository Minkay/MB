<?php

class HistorialSolicitudBean {

    public $idHistorialSolicitud;
    public $idSolicitud;
    public $nomRespuestaSolicitud;
    public $nomComentario;
    public $imgSolicitudRespuesta;
    public $fechaRespuesta;

    function getIdHistorialSolicitud() {
        return $this->idHistorialSolicitud;
    }

    function getIdSolicitud() {
        return $this->idSolicitud;
    }

    function getNomRespuestaSolicitud() {
        return $this->nomRespuestaSolicitud;
    }

    function getNomComentario() {
        return $this->nomComentario;
    }

    function getImgSolicitudRespuesta() {
        return $this->imgSolicitudRespuesta;
    }

    function getFechaRespuesta() {
        return $this->fechaRespuesta;
    }

    function setIdHistorialSolicitud($idHistorialSolicitud) {
        $this->idHistorialSolicitud = $idHistorialSolicitud;
    }

    function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    function setNomRespuestaSolicitud($nomRespuestaSolicitud) {
        $this->nomRespuestaSolicitud = $nomRespuestaSolicitud;
    }

    function setNomComentario($nomComentario) {
        $this->nomComentario = $nomComentario;
    }

    function setImgSolicitudRespuesta($imgSolicitudRespuesta) {
        $this->imgSolicitudRespuesta = $imgSolicitudRespuesta;
    }

    function setFechaRespuesta($fechaRespuesta) {
        $this->fechaRespuesta = $fechaRespuesta;
    }

}
