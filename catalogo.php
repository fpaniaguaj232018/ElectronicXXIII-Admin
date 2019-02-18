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
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($productos as $producto) {
                    ?>
                    <tr>
                        <td><?=$producto->getId()?></td>
                        <td><?=$producto->getIdCategoria()?></td>
                        <td><?=$producto->getNombre()?></td>
                        <td><?=$producto->getPvp()?></td>
                        <td><img width="100px" src="<?=$producto->getImagen()?>"></a></td>
                        <td><a href="./controller/deleteController.php?id=<?=$producto->getId()?>"><img src="delete.png" width="30px"></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
