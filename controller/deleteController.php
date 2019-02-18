<?php
    require_once '../model/GestorProductos.php';
    //BORRAR
    $id = $_GET["id"];
    eliminarProducto($id);
    //RECUPERAR LOS PRODUCTOS
    session_start();//Si no hay sesion, la crea
    $productos = getProductos();
    $_SESSION["productos"]=$productos;
    //REDIRIGIR LA SALIDA
    header('Location: ../catalogo.php');
    die;