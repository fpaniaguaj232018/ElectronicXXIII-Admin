<!DOCTYPE html>
<?php
    $mensaje = "";
    if (isset($_GET["mensaje"])){
        $mensaje=$_GET["mensaje"];
    }
?>
<html>
    <!-- VIVA LA XBOX (Alberto Espinosa, 2019-02-14)-->
    <!-- BENZEMA BALON DE ORO (Alejandro Mateos, 2019-02-14)-->
    <!-- EL PROFESOR (FPANIAGUA) NO ESTA DE ACUERDO CON LA LINEA ANTERIOR, 2019-02-14-->
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?=$mensaje?>
        <!-- HABRIA QUE HACERLO POR POST, PERO SOMOS LIBRES-->
        <form method="GET" action="controller/creadorProductosController.php"> 
            <input type="number" id="idCategoria" name="idCategoria" placeholder="Id. de Categoria" size="100">
            <br>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" size="100">
            <br>
            <input type="number" id="pvp" name="pvp" placeholder="Precio de venta" size ="6">
            <br>
            <textarea rows="6" cols="100" id="urlImagen" name="urlImagen" placeholder="URL de la imagen">
            </textarea>
            <br>
            <input type="submit" value="Crear">
        </form>

        
    </body>
</html>
