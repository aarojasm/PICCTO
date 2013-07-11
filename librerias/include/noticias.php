
<?php
    include '../conexion/conexion.php';
    $sql = 'SELECT titulo, cuerpo, autor, fecha, categoria from noticia order by fecha desc';
    $result = mysql_query($sql);
?>
<div class="noticias">
    <table>
        <?php
            while($row = mysql_fetch_array($result))
            {
                echo '<tr>';
                $url = str_replace(' ','-',$row['titulo']);
                echo '<div class="tituloNoticia">'.$row['titulo'].'</div>';
                echo '<div class="detalleNoticia">'.$row['cuerpo'].' </div>';
                $fecha = substr($row['fecha'],0,10);
                echo '<div class="finNoticia">'.$row['autor'].' '.$fecha.' '.$row['categoria'].'</div>'; 
                echo '<a href="../PICCTO/leeNoticia.php?id='.$url.'">ver más...</a> &nbsp;'; 
                //echo '<a href="../admin/editarNoticia.php?id='.$url.'">editar</a></div>';
                echo '<hr/></tr>';
            }
        ?>
    </table>
    <div style="visibility: hidden;"></div>
</div>