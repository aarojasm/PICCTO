<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mantenedor de Usuario</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
    </head>
    <body>
        <?php include "../librerias/include/encabezado.html" ?>
        <?php include "../librerias/include/menu1.html" ?>
        <?php include "../librerias/include/menu2.html" ?>
        <div class="page-wrap">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label>Usuario</label></td>
                        <td><input type="text" name="txtusuario" required placeholder="Ingrese Usuario"/></td>
                    </tr>
                    <tr>
                        <td><label>password:</label></td>
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
                    <tr>
                        <td><label>Rol</label></td>
                        <td><select name="rol">
                            <option value="1">usuario</option>
                            <option value="2">superusuario</option>
                            <option value="3">administrador</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="actualizar" value="Actualizar"/>
            </form>
        </div>    
    </body>
</html>
