<?php
    
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
        <?php include "../librerias/include/encabezado.html" ?>
        <?php include "../librerias/include/menu1.html" ?>
        <?php include "../librerias/include/menu2.html" ?>
        <div class="page">
            <div class="page-wrap">
                <?php include "../librerias/include/noticias.php";?>
            </div>
        </div>
        <?php include "../librerias/include/footer.html" ?>
    </body>
</html>
