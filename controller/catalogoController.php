<?php
require_once '../model/GestorProductos.php';
session_start();//Si no hay sesion, la crea
$productos = getProductos();
$_SESSION["productos"]=$productos;
header('Location: ../catalogo.php');
die;

