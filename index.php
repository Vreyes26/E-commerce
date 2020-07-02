<?php
session_start();
?>
<!DOCTYPE html>

<html id="index">
    <head>
        <meta charset="UTF-8">
        <title>E-commerce</title>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav>
            <?php
                if(isset($_SESSION["nombre"])){
                ?>
                <div class="usuario">
                    <a id="label_username"><?php echo($_SESSION["nombre"]);?></a>
                    <div class="cerrar_sesion">
                        <a href="logout.php" id="sesion-close">Cerrar sesion</a>
                    </div>
                </div>
                <?php
                }
                else
                {
                ?>
                <a class="in-sesion" href="login.php">Iniciar sesion</a>
                <?php
                }
            ?>
                <h1 class="indx">Tienda online</h1>
        </nav>
        
        <div class="dv-productos">
            <div class="producto">
                <p>producto_1</p>
                <img src="img/producto.jpg" alt="producto 1"/>
            </div>
            <div class="producto">
                <p>producto_2</p>
                <img src="img/producto.jpg" alt="producto 2"/>
            </div>
            <div class="producto">
                <p>producto_3</p>
                <img src="img/producto.jpg" alt="producto 3"/>
            </div>
        </div>
        <div class="dv-productos">
            <div class="producto">
                <p>producto_4</p>
                <img src="img/producto.jpg" alt="producto 4"/>
            </div>
            <div class="producto">
                <p>producto_5</p>
                <img src="img/producto.jpg" alt="producto 5"/>
            </div>
            <div class="producto">
                <p>producto_6</p>
                <img src="img/producto.jpg" alt="producto 6"/>
            </div>
        </div>
        
    </body>
</html>
