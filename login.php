 <?php 
    // require('./database.php');

    // session_start();

    // if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    //     $_SESSION['status'] = 'invalid';
    // }
    // if ($_SESSION['status'] == 'valid') {
    //     echo "<script>window.location.href = '/crud-dev/home.php'</script>";
    // }

    // if (isset($_POST['login'])) {
    //     $username = ($_POST['username']);
    //     $password = ($_POST['password']);

    //     if (empty($username) || empty($password)) {
    //         echo 'Please fill up all fields';
    //     }else {
    //         $queryValidate = "SELECT * FROM accounts WHERE username = '$username' AND password = md5('$password')";
    //         $sqlValidate = mysqli_query($connection, $queryValidate);
    //         $rowValidate = mysqli_fetch_array($sqlValidate);

    //         if (mysqli_num_rows($sqlValidate) > 0) {
    //             $_SESSION['status'] = 'valid';
    //             $_SESSION['username'] = $rowValidate['username'];

    //             echo "<script>window.location.href = '/crud-dev/home.php'</script>";
    //         }else {
    //             $_SESSION['status'] = 'Invalid';
    //             echo 'Invalid credential';
    //         }
    //     }    
    // }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style/login.css">
    <style>background-image: url("C:\xampp\htdocs\crud-dev\images\save1.jpg");</style>  
</head>
<body>

    <div id="form"> 
        <form name="form" action="/crud-dev/login.php" method = "post">
            <div class="logo-title">
                <img src="images/logo.png" alt="Logo"> <!-- Add your logo here -->
                <h2>Log in</h2>
            </div>
            <div class="verify">
                <p>New to Nwow AI web support?</p>
                <a href="">Verify here!</a>
            </div><br>
                <input type="text" id="user" name="username" placeholder="Enter your username"><br>
                <input type="password" id="pass" name="password" placeholder="Enter your password"><br>
                <input type="submit" id="sub" value="Log In" name="login"><br><br>
            <a href="reset.php">Forgot Password?</a>

        </form> 
    </div>

</body>
</html>


<?php 
require('./database.php');

session_start();

if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    $_SESSION['status'] = 'invalid';
}
if ($_SESSION['status'] == 'valid') {
    echo "<script>window.location.href = '/crud-dev/home.php'</script>";
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo 'Please fill up all fields';
    } else {
        // Use prepared statements to prevent SQL injection
        $queryValidate = "SELECT * FROM accounts WHERE username = ?";
        $stmt = mysqli_prepare($connection, $queryValidate);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowValidate = mysqli_fetch_array($result);

            if ($rowValidate && password_verify($password, $rowValidate['password'])) {
                $_SESSION['status'] = 'valid';
                $_SESSION['username'] = $rowValidate['username'];

                echo "<script>window.location.href = '/crud-dev/home.php'</script>";
            } else {
                $_SESSION['status'] = 'invalid';
                echo 'Invalid credentials';
            }

            mysqli_stmt_close($stmt);
        } else {
            echo 'Database error';
        }
    }
}
?>