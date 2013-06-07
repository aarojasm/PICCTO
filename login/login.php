<?php
session_start();
include_once "../conexion/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body><div class="page">
            <?php include "../librerias/include/encabezado.html" ?>
            <?php include "../librerias/include/menu1.html" ?>
            <?php include "../librerias/include/menu2.html" ?>
            
            <div class="page-wrap">
                <form action="" method="post" class="registro">
                    <div><label>Usuario:</label> <input type="text" name="usuario"></div>
                    <div><label>Clave:</label> <input type="password" name="password"></div>
                    <div><label>Repetir Clave:</label> <input type="password" name="repassword"></div>
                    <div><input type="submit" name="enviar" value="Registrar"></div>
                </form> 
            </div>
        </div>
        
    </body>
</html>