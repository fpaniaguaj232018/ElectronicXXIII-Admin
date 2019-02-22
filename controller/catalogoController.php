<?php
require_once '../model/GestorProductos.php';
//Si no hay sesion, la crea
session_start();
$productos = getProductos();
$_SESSION["productos"]=$productos;
header('Location: ../catalogo.php');
die;