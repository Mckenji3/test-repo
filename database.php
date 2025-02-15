<?php
    $host = 'sql105.infinityfree.com';
    $user = 'if0_38321047';
    $password = 'lU95HMCOvl';
    $database = 'if0_38321047_create_db';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo "Error: Unable to connect to MYSQL <br>";
        echo "message: ".mysqli_connect_error()."<br>";
    }
?>

