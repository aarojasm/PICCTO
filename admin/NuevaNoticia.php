<?php
    include_once '../conexion/conexion.php';
    if(isset($_POST['guardar']))
    {
        if($_POST['titulo'] == '' or $_POST['cuerpo'] == '')
        { echo 'Debe completar todos los campos'; }
        else
        {
            $titulo = $_POST[titulo];
            $cuerpo = $_POST[cuerpo];
            $fecha = date('Y-m-d');
            $sql = "INSERT INTO piccto.noticia (titulo,cuerpo,fecha) values ('$titulo','$cuerpo','$fecha')";
            mysql_query($sql);
            echo "<script language='JavaScript'>alert('Se a Ingresado la Noticia.'); </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Nueva Noticia</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="page">
            <?php   include '../librerias/include/encabezado.html';
                    include '../librerias/include/menu1.html'; 
                    include '../librerias/include/menu2.html'; ?>
            
            <div class="page-wrap">
                <form action="" method="post">
                    <div>
                        <table style="width: 800px;">
                            <tr>
                                <td style="width: 250px;"><label class="lbl">Titulo</label></td>
                                <td><input class="texto" type="text" required placeholder="Ingrese un Título" name="titulo"/> </td>
                            </tr>
                            <tr>
                                <td style="width: 250px;"><label class="lbl">Cuerpo</label></td>
                                <td><textarea name="cuerpo" style="width: 500px; height: 130px;" ></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="guardar" style="margin-left: 32%;" value="Guardar Noticia"/></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>