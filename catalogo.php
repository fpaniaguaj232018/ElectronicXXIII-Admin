<!DOCTYPE html>
<?php
    $mensaje = "";
    if (isset($_GET["mensaje"])){
        $mensaje=$_GET["mensaje"];
    }
    $productos = getProductos();
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

        <div id="listadoProductos">
            <table border="1" width="80%" cellpadding="5">
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>Id. categoria</th>
                        <th>Nombre</th>
                        <th>PVP</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Tarta de queso</td>
                        <td>12</td>
                        <td><img width="100px" src="data:image/jpeg;base64,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"</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>Coulant de chocolate</td>
                        <td>8</td>
                        <td><img width="100px" src="https://farm4.staticflickr.com/3207/2692501655_ee2ec2da5c_o.jpg"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
