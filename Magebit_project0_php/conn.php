<?php

    $serverName = 'localhost';
    $serverUser = 'root';
    $serverPassword = '';
    $dbName = 'pineapple_project';

    $conn = mysqli_connect($serverName, $serverUser, $serverPassword, $dbName);
    
    if(!$conn){
        echo "<h3 class='data-base-wr>we got a problem trynig to connect ur db'</h3>";
        die("connection failed" . mysqli_connect_error());
    } else {
        echo '';
    }


?>