<?php
require_once '../model/Usuario.php';
require_once '../model/ValidadorUsuarios.php';
//1. RECOGER LOS DATOS
$email = $_POST["email"];
$password= $_POST["password"];
//2. Construye el objeto y llama al model
$usuario = new Usuario($email, $password);
validarUsuario($usuario);



