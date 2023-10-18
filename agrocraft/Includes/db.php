<?php 

    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "cast_climate";

    // Create Connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed" . mysqli_connect_error());
    } 
?>