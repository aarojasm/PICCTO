<?php
    include_once '/conexion/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>PICCTO</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <meta name="description" content="Página de Inicio, que muestra las ultimas noticias sobre nosotros"/>
    </head>
    <body>       
        <?php include '/librerias/include/encabezado.html';
            include '/librerias/include/menu1.html'; 
            include '/librerias/include/menu2.html'; 
            include 'librerias/include/aside.html'; ?>
        <div class="page">
            <div class="page-index">
                <?php include '/librerias/include/noticias.php';?>
            </div>
        <?php include '/librerias/include/footer.html'; ?>
        </div>
    </body>
</html>