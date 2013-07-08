<?php
include_once "/conexion/conexion.php";
    $sql = 'SELECT * FROM usuario';
    $rec = mysql_query($sql);
     while($result = mysql_fetch_object($rec))
    {
        if($result->usuario == $_POST['usuario'])
        {echo $result;}
    }

    if(isset($_POST['enviar']))
    {
        if($_POST['txtusuario'] <> '' or $_POST['password'] <> '' or $_POST['repassword'] <> '' or $_POST['txtnombre'] <> '' or $_POST['txtapellido'] <> '' or $_POST['txtemail'] <> '')
        {
            $sql = 'SELECT * FROM piccto.usuario';
            $rec = mysql_query($sql);
            $verificar_usuario = 0; 
            while($result = mysql_fetch_object($rec))
            {
                if($result->usuario == $_POST['usuario'])
                {$verificar_usuario = 1;}
            }
            if($verificar_usuario == 0)
            {
                if($_POST['password'] == $_POST['repassword'])
                {
                    $usuario = $_POST['txtusuario'];
                    $password = $_POST['password'];
                    $nombre = $_POST['txtnombre'];
                    $apellido = $_POST['txtapellido'];
                    $email = $_POST['txtemail'];
                    $passwordEncriptada = sha1(md5($password));
                    $sql = "INSERT INTO usuario (usuario,password, nombre, apellido, email, rol) VALUES ('.$usuario.','.$passwordEncriptada.','.$nombre.','.$apellido.','.$email.','1')";
                    echo $sql;
                    mysql_query($sql);
                    echo 'Usted se ha registrado correctamente.';   
                }
                else
                { echo 'Las claves no son iguales, intente nuevamente.';  }
            }
            else
            {echo 'Este usuario ya ha sido registrado anteriormente.';}
        }
        else
        { echo 'Por favor llene todos los campos.'; }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro de Usuario</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
    </head>
    <body>
        <?php include "../librerias/include/encabezado.html" ?>
        <?php include "../librerias/include/menu1.html" ?>
        <?php include "../librerias/include/menu2.html" ?>
            <div class="page-wrap">
                <form action="" method="post" class="registro">
                    <table>
                        <tr>
                            <td><label>ID:</label></td>
                            <td><input type="text" required placeholder="Ingresar Usuario" name="txtusuario"/></td>
                        </tr>
                        <tr>
                            <td><label>Contraseña:</label></td>
                            <td><input type="password" required placeholder="Ingresar Clave" name="password"></td>
                        </tr>
                        <tr>
                            <td><label>Repetir Clave:</label></td>
                            <td><input type="password" required placeholder="Confirmar Clave" name="repassword"></td>
                        </tr>
                        <tr>
                            <td><label>Nombre:</label></td>
                            <td><input type="text" required placeholder="Ingresar Nombre" name="txtnombre"/></td>
                        </tr>
                        <tr>
                            <td><label>Apellido:</label></td>
                            <td><input type="text" required placeholder="Ingresar Apellido" name="txtapellido"/></td>
                        </tr>
                        <tr>
                            <td><label>Email:</label></td>
                            <td><input type="email" required placeholder="Ingrese Correo" name="txtemail"/></td>
                        </tr>
                    </table>
                    <div><input type="submit" name="enviar" value="Registrar"></div>
                </form>
            </div>
    </body>
</html>