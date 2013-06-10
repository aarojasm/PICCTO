<?php
    session_start();
    include_once "../conexion/conexion.php";
    //Validaciones de Campos de login

    //valido en la BD


    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $rol;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Login PICCTO</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
    </head>
    <body><div class="page">
            <?php include "../librerias/include/encabezado.html" ?>
            <?php include "../librerias/include/menu1.html" ?>
            <?php include "../librerias/include/menu2.html" ?>
            
            <div class="page-wrap">
                <form action="" method="post" class="registro">
                    <div><label>Usuario:</label> <input type="text" name="usuario"></div>
                    <div><label>Clave:</label> <input type="password" name="password"></div>
                    <div><input type="submit" name="enviar" value="Login"></div>
                </form> 
            </div>
        </div>
        
    </body>
</html>