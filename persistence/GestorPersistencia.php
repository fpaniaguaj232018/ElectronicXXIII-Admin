<?php
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