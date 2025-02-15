<?php 

    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {

        $_SESSION['status'] = 'invalid';

        unset($_SESSION['username']);

        echo "<script>window.location.href = '/crud-dev/login.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="style3.css">
</head>

    <form action="/crud-dev/logout.php" method = "post">
        <input type="submit" value = "LOGOUT" />
    </form>
</body>
</html>
