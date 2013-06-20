<?php
    // datos para la coneccion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','aarojasm_aarojasm');
    define('DB_USER','aarojasm_root');
    define('DB_PASS','ARM3007d');
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
?>