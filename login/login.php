<?php
    session_start();
    include_once "../conexion/conexion.php";
    //Validaciones de Campos de login
    if(isset($_POST['enviar']))
    {
        if($_POST['usuario']<> '' or $_POST['password']<> '')
        {
            $usuario = $_POST['usuario'];
            $clave = $_POST['password'];
            $encriptarClave = sha1(md5($clave));
            $sql = "SELECT COUNT(usuario), rol from usuario where usuario = '".$usuario."' AND password = '".$clave."'";
            $result = mysql_query($sql);
            $cantidad = count($result);
            if($cantidad >0)
            {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['rol'] = $rol;
                echo $_SESSION['usuario'];
            }
        }
        else
        { echo "<script languaje='text/javascript'>alert('Deje Completar todos los Campos.')</script>"; }
    }
    //valido en la BD
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login PICCTO</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página que realiza el login para el acceso a la intranet."/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <style>
            /*.page{
                position: relative;
                top: 0px;
            }
            .page-wrap{
                position: relative;
                top: 0px;
            }*/
        </style>
    </head>
    <body>
            <?php 
                include '../librerias/include/encabezado.html'; 
                include '../librerias/include/menu1.html';
                include '../librerias/include/menu2.html'; 
            ?>
        <div class="page">  
            <div class="page-wrap">
                <form action="" method="post" class="registro">
                    <div><label>Usuario:</label> <input type="text" required placeholder="Ingrese Usuario" name="usuario"></div>
                    <div><label>Clave:</label> <input type="password" required placeholder="Ingrese Password" name="password"></div>
                    <div><input type="submit" name="enviar" value="Login"></div>
                    <a href="../login/registro.php">¿No esta Registrado?</a>
                </form> 
            </div>
        </div>
    </body>
</html>