<?php

    $DB_HOST = "locahost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_DATABASE = "";

    // Create Connection
    $conn = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
    mysql_select_db($DB_DATABASE);

    // Check connection
    if ($conn) {
        die("Connection failed: " . mysql_error());
    } 
    echo "Connected successfully";
?>