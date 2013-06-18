<?php
    include_once '../conexion/conexion.php';
    $sql = 'SELECT titulo, cuerpo, autor, fecha, categoria from noticia order by fecha desc';
    $result = mysql_query($sql);
?>
<div class="noticias">
    <table>
        <?php 
            while($row = mysql_fetch_array($result))
            {
                echo '<tr>';
                $url = str_replace(' ','-',$row[titulo]);
                echo '<p class=\"titulo\">'.$row[titulo].'</p>';
                echo '<div>'.$row[autor].' '.$row[fecha].' '.$row[categoria].'</div>'; 
                echo '<a href="../PICCTO/leeNoticia.php?id='.$url.'">ver más...</a> &nbsp;'; 
                echo '<a href="../admin/editarNoticia.php?id='.$url.'">editar</a></div>';
                echo '</tr>';
            }
        ?>
    </table>
    <div style="visibility: hidden;"></div>
</div>