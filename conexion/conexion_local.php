<?php
    // datos para la coneccion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','aarojasm');
    define('DB_USER','root');
    define('DB_PASS','aaronrojas26');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
?>