<?php
require_once 'Usuario.php';
require_once '../persistence/GestorPersistencia.php';

function validarUsuario($usuario){
    return isUserOk($usuario);
}
