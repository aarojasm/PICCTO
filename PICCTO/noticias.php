<?php
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Noticias</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de noticias de la empresa"/>
        <script src="../librerias/jquery/jquery-1.10.1.js" type="text/javascript"></script>
    </head>
    <body>              
        <?php include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';?>
        <div class="page">
            <div class="page-wrap">
                <?php include '../librerias/include/noticias.php';?>
            </div>
        </div>
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>
