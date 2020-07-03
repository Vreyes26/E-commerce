<?php
include_once 'carroCompras.php';
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table style="width:100%">
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php echo productoLn($nombre, $cantidad, $precio)?>
        </table> 
    </body>
</html>
