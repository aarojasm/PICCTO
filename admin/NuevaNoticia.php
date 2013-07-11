<?php
    include_once '../conexion/conexion.php';
    if(isset($_POST['guardar']))
    {
        if($_POST['titulo'] == '' or $_POST['editor1'] == '')
        { echo 'Debe completar todos los campos'; }
        else
        {
            $titulo = $_POST['titulo'];
            $cuerpo = $_POST['editor1'];
            $fecha = date('Y-m-d');
            $sql = "INSERT INTO noticia (titulo,cuerpo,fecha) values ('$titulo','$cuerpo','$fecha')";
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
        <link type="text/css" rel="stylesheet" href="/librerias/css/sample.css"/>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <script src="/librerias/jquery/cke/ckeditor.js" type="text/javascript"></script>

        <script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
		</script>>
    </head>
    <body>
            <?php   
                include '../librerias/include/encabezado.html';
                include '../librerias/include/menu1.html'; 
                include '../librerias/include/menu2.html'; 
            ?>
        <div class="page">  
            <div class="page-wrap">
                <form action="" method="post">
                    <div>
                        <table style="width: 1024px;">
                            <tr>
                                <td style="width: 150px;"><label class="lbl">Titulo</label></td>
                                <td><input class="texto" type="text" required placeholder="Ingrese un Título" name="titulo"/> </td>
                            </tr>
                            <tr>
                                <td colspan="2"><label class="lbl">Cuerpo</label></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                   <textarea id="editor1" name="editor1"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="guardar" style="margin-left: 45%;" value="Guardar Noticia"/></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>