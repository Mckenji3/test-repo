<?php

set_time_limit(0); // Disable script timeout
ini_set('max_execution_time', 300); // Set max execution time to 5 minutes


    $host = 'fdb1028.awardspace.net';
    $user = '4590988_createdb';
    $password = 'lU95HMCOvl';
    $database = '4590988_createdb';
    $port = '3306';

    $connection = mysqli_connect($host, $user, $password, $database, $port);

    if (mysqli_connect_error()) {
        echo "Error: Unable to connect to MYSQL <br>";
        echo "message: ".mysqli_connect_error()."<br>";
    }
?>


