<?php
    include_once "../conexion/conexion.php";
    $sql = "SELECT titulo, cuerpo from PICCTO.noticia order by fecha desc";
    $result = mysql_query($sql);
    
    while($row = mysql_fetch_row($result))
    {
        echo $row['cuerpo'];
    }

?>