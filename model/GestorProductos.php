<?php
require_once '../persistence/GestorPersistencia.php';
function crearProducto($idCategoria, $nombre, $pvp, $urlImagen){
    agregarProducto($idCategoria, $nombre, $pvp, $urlImagen);
}
function getProductos(){
    $productos = getProductosFromBBDD();
    return $productos;
}