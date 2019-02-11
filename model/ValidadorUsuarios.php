<?php
require_once 'Usuario.php';
require_once '../persistence/GestorPersistencia.php';

function validarUsuario($usuario){
    if (isUserOk($usuario)){
        header('Location: ../index.php');
        die;
    } else {
        header('Location: ../login.php?mensaje=Email o Password incorrectas');
        die;
    }
}
