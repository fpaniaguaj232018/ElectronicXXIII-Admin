<?php
require_once "../model/Usuario.php";
function getConnection(){
    $mysqli = new mysqli(
            "127.0.0.1",
            "electronicxxiii_adm",
            "benzema23",
            "electronicxxiii",
            3306);
    if($mysqli->connect_errno){
        echo("Error:".$mysqli->connect_error);
    }
    return $mysqli;
}
function agregarAdministrador($email, $password){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $conexion = getConnection();
    $conexion->query("INSERT INTO administradores (email, password) values('$email', '$password')");
    echo($conexion->error);
}
function isUserOk($usuario){
    $email = $usuario->getEmail();
    $conexion = getConnection();
    $sql = "SELECT * FROM administradores WHERE email='$email'";
    //$usuarios es cursor
    $usuariosBBDD = $conexion->query($sql);
    $usuarioBBDD = $usuariosBBDD->fetch_assoc();
    if($usuarioBBDD!=NULL){
        if(password_verify($usuario->getPassword(), $usuarioBBDD['password'])){
            return true;
        } 
    } 
    return false;
}
function agregarProducto($idCategoria, $nombre, $pvp, $urlImagen){ 
    $conexion = getConnection();
    $sentencia = "INSERT INTO productos (idCategoria, nombre, pvp, imagen) "
            . "values($idCategoria, '$nombre', $pvp, '$urlImagen')";
    $conexion->query($sentencia);
}
function getProductosFromBBDD(){
    $conexion = getConnection();
    $sql = "SELECT * FROM productos";
    $productos = $conexion->query($sql);
    while ($producto = mysql_fetch_assoc($productos)) {
        //Instanciar una clase producto por cada registro y 
        //la guardamos en un array
    }        
}



















