<?php

require_once '../model/GestorProductos.php';
//idCategoria, nombre, pvp, urlImagen
$idCategoria = $_GET["idCategoria"];
$nombre = $_GET["nombre"];
$pvp = $_GET["pvp"];
$urlImagen = $_GET["urlImagen"];
crearProducto($idCategoria, $nombre, $pvp, $urlImagen);
header('Location: ../catalogo.php?mensaje=Producto agregado');
die;



