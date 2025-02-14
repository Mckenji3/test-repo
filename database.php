<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'create_db';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo "Error: Unable to connect to MYSQL <br>";
        echo "message: ".mysqli_connect_error()."<br>";
    }
?>

