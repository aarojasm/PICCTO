<?php
    include_once "../conexion/conexion.php";
    $noticia = $_GET['noticia'];
    $noticia = str_replace("-"," ",$noticia);
    $sql = "SELECT titulo, cuerpo from piccto.noticia where titulo = '".$noticia."'";
    $result = mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
    </head>
    <body>           
        <?php include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';?>
        <div class="page">
            <?php
                $row = mysql_fetch_array($result);
                //echo $result;
                echo "<div class=\"titulo\">".$row['titulo']."</div>";
                echo "<div class=\"cuerpo\">".$row['cuerpo']."</div>";
            ?>
        </div>
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>
