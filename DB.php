<?php

    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_DATABASE = "RL_db";

    // Create Connection
    $conn = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
    mysql_select_db($DB_DATABASE);

    // Check connection
    if (!$conn) {
        die("Cannot connect to database!");
    }
    
    return $conn;
?>