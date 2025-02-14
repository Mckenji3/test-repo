<?php
    // Include database.php from the root folder
    require(__DIR__ . '/./database.php');

    $queryAccounts = "SELECT * FROM accounts";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);

?>
