<?php
include_once "../conexion/conexion.php";
//include_once "../admin/envioCorreo.php";
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
            $sql = "INSERT INTO piccto.contacto (nombre, empresa, telefono, email, direccion, ciudad, cuerpo, fecha) VALUES ('$nombre','$empresa','$telefono','$correo','$direccion','$ciudad','$cuerpoMensaje','$fecha')";
            mysql_query($sql);
            echo "<script language='JavaScript'>alert('Ha sido registrado su contacto, pronto nos comunicaremos con usted.'); </script>";
            //enviarCorreo('aaron.rojas.martinez@gmail.com','Contacto desde Pagina web', $nombre,$empresa,$telefono,$direccion,$ciudad,$correo,$cuerpoMensaje);
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Contacto</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <style>
            .p2{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <?php include "../librerias/include/encabezado.html" ?>
            <?php include "../librerias/include/menu1.html" ?>
            <?php include "../librerias/include/menu2.html" ?>
            <div class="page-wrap">
                <div class="personas">
                        <div class="nombres">
                          <p class="p2">Aida Torres Piccardo<br/>
                          Directora General<br/>
                            atorres@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Egla Torres<br/>
                          Directora Comercial<br/>
                            erojas@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Genoveva Candía<br/>
                          Directora Servicio Social<br/>
                          gcandia@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Nicole Sotomayor<br/>
                          Jefa Área Educación<br/>
                          atorres@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Aicia Mancilla<br/>
                          Jefa Área Evaluación Curricular<br/>
                          amancilla@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Alejandra Valencia<br/>
                          Especialista Área Matemática<br/>
                          avalencia@consultorapiccto.cl</p>
                        </div>
                        <div class="nombres">
                          <p class="p2">Lucila Avilés<br/>
                          Especialista Lenguaje y Comunicación<br/>
                          laviles@consultorapiccto.cl</p>
                        </div>
                </div>
                <form action="" method="post">
				    <div class="formulario">
					    <table style="width: 723px;">
							    <tr>
								    <td class="td1"><label class="lbl">Nombre</label></td>
								    <td><input  class="texto" type = "text" name = "nombre" required placeholder="Ingrese nombre"/> </td>
							    </tr> 
							    <tr>
								    <td class="td1"><label class="lbl">Empresa</label></td>
								    <td> <input class="texto" type = "text" name="empresa" required placeholder="Ingrese empresa"/> </td>
							    </tr>
							     <tr>
								    <td class="td1"><label class="lbl">Teléfono</label> </td>
								    <td><input class="texto" type="tel" name="telefono" required placeholder="Ingrese Teléfono"/></td>
							    </tr>
							     <tr>
								    <td class="td1"><label class="lbl">Correo Electronico</label> </td>
								    <td><input class="texto" type="email" name="correo" required placeholder="Ingrese Email"/></td>
							    </tr>
							     <tr>
								    <td class="td1"><label class="lbl">Dirección</label> </td>
								    <td><input  class="texto" type="text" name="direccion" required placeholder="Ingrese Dirección"/></td>
							    </tr>
							     <tr>
								    <td class="td1"><label class="lbl">Cuidad</label> </td>
								    <td><input class="texto" type="text" name="ciudad" required placeholder="Ingrese Ciudad"/></td>
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
				    </div>
                </form>
            </div>
        <?php include "../librerias/include/footer.html" ?>
        </div>
    </body>
</html>