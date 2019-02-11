<?php
    //1. Recoger la información 
    $mensaje = "";
    if (isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="controller/registrador.php">
            <?=$mensaje?><br>
            <input type="email" name="email" id="email" placeholder="email"><br>
            <input type="password" name="password" id="password" placeholder="Contraseña"><br>
            <input type="submit" value="Registrar"><br>
        </form>
    </body>
</html>
