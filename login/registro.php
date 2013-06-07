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
        if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
        {echo 'Por favor llene todos los campos.';}
        else
        {   
            $sql = 'SELECT * FROM usuario';
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
                    $usuario = $_POST['usuario'];
                    $password = $_POST['password'];
                    $sql = "INSERT INTO piccto.usuario (usuario,password) VALUES ('$usuario','$password')";
                    mysql_query($sql);
                    echo 'Usted se ha registrado correctamente.';   
                }
                else
                { echo 'Las claves no son iguales, intente nuevamente.';  }
            }
            else
            {echo 'Este usuario ya ha sido registrado anteriormente.';}
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Registro de Usuario</title>
    </head>
    <body>
        <form action="" method="post" class="registro">
            <div><label>Usuario:</label> <input type="text" required placeholder="Ingresar Usuario" name="usuario"></div>
            <div><label>Clave:</label> <input type="password" required placeholder="Ingresar Clave" name="password"></div>
            <div><label>Repetir Clave:</label> <input type="password" required placeholder="Confirmar Clave" name="repassword"></div>
            <div><input type="submit" name="enviar" value="Registrar"></div>
        </form>
    </body>
</html>