<?php
    include_once '../conexion/conexion.php';
    $noticia = $_GET['id'];
    $noticia = str_replace("-"," ",$noticia);
    $sql = "SELECT titulo, cuerpo from noticia where titulo = '".$noticia."'";
    $result = mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Descripción de Noticias</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
    </head>
    <body>           
        <?php include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';?>
        <div class="page">
            <?php
                while($row = mysql_fetch_array($result))
                {
                    echo '<div class="divTitulo"><center>'.$row[titulo].'</center></div>';
                    echo '<div class="divCuerpo">'.$row[cuerpo].'</div>';
                }
            ?>
        </div>
        <!--<?php include '../librerias/include/footer.html'; ?>-->
    </body>
</html>
