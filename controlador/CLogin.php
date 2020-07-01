<?php
    session_start();
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
    $contador = 0;
    
    if($nombre != "admin")
    {
        $contador++;
    }
    
    if($contraseña != "abc123"){
        $contador++;
    }
    
    if($contador == 0)
    {
        $_SESSION["nombre"] = $nombre;
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../login.php");
        echo 'alert("Error inicio de sesion")';
    }

        
