<?php

class Producto {
    private $id;
    private $idCategoria;
    private $nombre;
    private $pvp;
    private $imagen;
    function __construct($id, $idCategoria, $nombre, $pvp, $imagen) {
        $this->id = $id;
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
        $this->pvp = $pvp;
        $this->imagen = $imagen;
    }
    function getId() {
        return $this->id;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPvp() {
        return $this->pvp;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPvp($pvp) {
        $this->pvp = $pvp;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
}
