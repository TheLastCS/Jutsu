<?php

const HOST = 'localhost';
define('DB_NAME', 'sample');
define('USERNAME', 'root');
const PASSWORD ='';

    
    $mysqli = new mysqli(HOST,USERNAME,PASSWORD,DB_NAME);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    // var_dump($mysqli);
?>