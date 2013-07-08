<?php
include '../conexion/conexion.php';
include '../admin/envioCorreo.php';
    if(isset($_POST['enviar']))
    {
        if($_POST['nombre'] == '' or $_POST['empresa'] == '' or $_POST['telefono'] == '' or $_POST['correo'] == '' or $_POST['direccion'] == '' or $_POST['ciudad'] == '' or  $_POST['cuerpoMensaje'] == '')
        {echo "<script language='JavaScript'>alert('Debe completar todos los campos.'); </script>";}
        else
        {
            $nombre = $_POST['nombre'];
            $empresa = $_POST['empresa'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $cuerpoMensaje = $_POST['cuerpoMensaje'];
            $fecha = date('Y-m-d');
            $sql = "INSERT INTO contacto (nombre, empresa, telefono, email, direccion, ciudad, cuerpo, fecha) 
                            VALUES ('$nombre','$empresa','$telefono','$correo','$direccion','$ciudad','$cuerpoMensaje','$fecha')";
            mysql_query($sql);
            enviarCorreo('contacto@consultorapiccto.cl','Contacto desde Pagina web', $nombre,$empresa,$telefono,$direccion,$ciudad,$correo,$cuerpoMensaje);
            echo "<script language='JavaScript'>alert('Ha sido registrado su contacto, pronto nos comunicaremos con usted.'); </script>"; 
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contacto</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página para que personas o empresas nos puedan contactar"/>
        <script src="../librerias/jquery/jquery-1.10.1.js" type="text/javascript"></script>
        <style>
            .p2{
                text-align: center;
            }
        </style>
    </head>
    <body>        
        <?php 
            include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';
            include '../librerias/include/personas.html';
        ?> 

        <div class="page-wrap">
			<div class="formulario">
                <form action="" method="post">
					<table class="tblFormulario">
							<tr>
								<td class="td1"><label class="lbl">Nombre</label></td>
								<td><input  class="texto" type = "text" name = "nombre" /> </td>
							</tr> 
							<tr>
								<td class="td1"><label class="lbl">Empresa</label></td>
								<td> <input class="texto" type = "text" name="empresa" /> </td>
							</tr>
							<tr>
								<td class="td1"><label class="lbl">Teléfono</label> </td>
								<td><input class="texto" type="tel" name="telefono" /></td>
							</tr>
							<tr>
								<td class="td1"><label class="lbl">Correo Electronico</label> </td>
								<td><input class="texto" type="email" name="correo" /></td>
							</tr>
							<tr>
								<td class="td1"><label class="lbl">Dirección</label></td>
                                <td><input class="texto" type="text" name="direccion" /></td>
							</tr>
							<tr>
								<td class="td1"><label class="lbl">Ciudad</label> </td>
								<td><input class="texto" type="text" name="ciudad" /></td>
							</tr>
							<tr>
							<td colspan="2">
                                <textarea class="texto" name="cuerpoMensaje" required placeholder="Ingrese su consulta" style="width: 605px; height: 150px;"></textarea>
                            </td>
							</tr>
							<tr>
								<td colspan="2" style=" position: absolute; margin-left:38%; "><input type="submit" name="enviar" value="Enviar"/></td>
							</tr>
					</table>
                </form>
			</div>
        </div>

        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>