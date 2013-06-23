<?php
    include_once '../conexion/conexion.php';
    $noticia = $_GET['id'];
    $noticia = str_replace("-"," ",$noticia);
    $sql = "SELECT titulo, cuerpo from noticia where titulo = '".$noticia."'";
    $result = mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
