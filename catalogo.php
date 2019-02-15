<!DOCTYPE html>
<?php
require_once './model/Producto.php';
session_start();
$productos = $_SESSION["productos"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
                    <?php
                    foreach ($productos as $producto) {
                    ?>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td><?=$producto->getNombre()?></td>
                        <td>8</td>
                        <td><img width="100px" src="https://farm4.staticflickr.com/3207/2692501655_ee2ec2da5c_o.jpg"></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
