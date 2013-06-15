<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Biblioteca</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de contenido multimedia"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <style>
            .page-wrap{
                height: 600px;
            }
        </style>
    </head>
    <body>        
        <?php include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';?>
        <div class="page">
            <div class="page-wrap">
                <center><img class="imgConstruccion" alt="Página en Construcción" src="../librerias/img/pagina_en_construccion.jpg"/>   </center>
                <div style="visibility: hidden;"></div>
            </div>
        </div> 
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>
