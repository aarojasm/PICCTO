<?php
    // datos para la coneccion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','consult7_PICCTO');
    define('DB_USER','consult7_piccto');
    define('DB_PASS','consultorapiccto12');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
?>