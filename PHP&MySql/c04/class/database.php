<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";
    // http://localhost:8013/phpmyadmin/
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect to DB <br>";
    }
?>