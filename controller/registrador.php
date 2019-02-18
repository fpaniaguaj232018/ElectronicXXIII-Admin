<?php
    require_once '../persistence/GestorPersistencia.php';

    //1. Recoger la información datos: email, password
    $email = $_POST["email"];
    $password = $_POST["password"];
    //2. Validar la información
    if ($email=="" || $password==""){
        //Mostrar un error
        header('Location: ../registro.php?mensaje=Debe indicar un email y una password');
        die;
    } else {
        //Registrar
        agregarAdministrador($email, $password);
        header('Location: ../index.php');
        die;
    }
