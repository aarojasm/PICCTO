<?php
    include_once "../conexion/conexion.php";
    $sql = "SELECT titulo, cuerpo from PICCTO.noticia order by fecha desc";
    $result = mysql_query($sql);
    //echo $result;
    while($row = mysql_fetch_row($result)){
        
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Noticias</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de noticias de la empresa"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="page">
            <!--<?php include "../librerias/include/encabezado.html" ?>
            <?php include "../librerias/include/menu1.html" ?>
            <?php include "../librerias/include/menu2.html" ?>-->
            <div class="page-wrap">
                <!--<?
                    include_once "../conexion/conexion.php";
                    $sql = "SELECT titulo, cuerpo from PICCTO.noticia order by fecha desc";
                    $result = mysql_query($sql); 
                    while($row = mysql_fetch_array($result))
                    {
                        echo $row['titulo'];
                    }
                ?>-->
            </div>
        <?php include "../librerias/include/footer.html" ?>
        </div>
    </body>
</html>
