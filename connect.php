<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "assess2";
    $connect = mysqli_connect($host, $username, $password, $database);

    if(!$connect){
        echo "Connecting Failed";
    }

?>