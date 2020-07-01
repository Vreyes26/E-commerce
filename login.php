<?php
session_start();
?>

<html>
    <head>
        <title>Login</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="loginBox">
            <a href="login.php"><img class="logo" src="img/icon.png" alt="Logo"/></a>
            <form action="controlador/CLogin.php" method="POST">
                <h1>Ingresar cuenta</h1>
                <label for="user">Usuario:</label>
                <input type="text" name="nombre" id="user" maxlength="12" placeholder="Usuario" required/>
                <label for="password">Contraseña:</label>
                <input type="password" name="contraseña" maxlength="10" id="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar" name="buttonSesion">
                
            </form>
        </div>
    </body>
</html>
