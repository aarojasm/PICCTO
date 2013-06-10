<?php
    include_once "../conexion/conexion.php";
    $sql = "SELECT titulo, cuerpo from PICCTO.noticia order by fecha desc";
    $result = mysql_query($sql);
?>
<div>
    <?php 
        while($row = mysql_fetch_array($result))
        {
            echo "<div class=\"divTitulo\"><a href=\" ../leeNoticias.php\">".$row['titulo']."</a></div>";
            echo "<div class=\"divCuerpo\">".$row['cuerpo']."</div>";
            echo "<br/>";
        }
    ?>
</div>