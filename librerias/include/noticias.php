<?php
    include_once "../conexion/conexion.php";
    $sql = "SELECT titulo, cuerpo from PICCTO.noticia order by fecha desc";
    $result = mysql_query($sql);
?>
<div class="noticias">
    <?php 
        while($row = mysql_fetch_array($result))
        {
            $url = str_replace(" ","-",$row['titulo']);
            echo "<div class=\"divTitulo\"><a href=\" ../PICCTO/leeNoticia.php?noticia=$url\">".$row['titulo']."</a><div></div></div>";
            echo "<div class=\"divCuerpo\">".$row['cuerpo']."</div>";
            echo "<br/>";
        }
    ?>
    <div style="visibility: hidden;"></div>
</div>