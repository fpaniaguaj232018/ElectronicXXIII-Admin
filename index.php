<?php
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
        <?=$mensaje?><br>
        <form method="POST" action="controller/validador.php">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <br>
            <input type="password" name="password" id="password" placeholder="Contraseña" size="100">
            <br>
            <input type="submit" value="Entrar">
        </form>
        <a href="registro.php">Registrarse</a>
    </body>
</html>
