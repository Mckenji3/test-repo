<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php 
session_start();
require('./database.php');

  unset($_SESSION['username']);

if (!isset($_SESSION['status']) || $_SESSION['status'] == 'invalid') {
    $_SESSION['status'] = 'invalid';
}

if ($_SESSION['status'] == 'valid') {
    echo "<script>window.location.href='/home.php'</script>";
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo '';
    } else {
        // Use prepared statements to prevent SQL injection
        $queryValidate = "SELECT * FROM accounts WHERE username = ?";
        $stmt = mysqli_prepare($connection, $queryValidate);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowValidate = mysqli_fetch_array($result);
            
            mysqli_stmt_close($stmt); // Close statement after fetching

            if ($rowValidate) {
                $storedPassword = $rowValidate['password'];

                // Check if the stored password is hashed or plain text
                if (password_verify($password, $storedPassword) || $password === $storedPassword) {
                    $_SESSION['status'] = 'valid';
                    $_SESSION['username'] = $rowValidate['username'];
                    echo "<script>window.location.href='/home.php'</script>";
                    exit();
                } else {
                    $_SESSION['status'] = 'invalid';
                       
                }
            } else {
                 echo "";
            }
        } else {
            echo "Database error: " . mysqli_error($connection);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style/login.css">
    
</head>
<body>

    <div id="form"> 
        <form name="form" action="/login.php" method = "post">
            <div class="logo-title">
                <img src="images/logo.png" alt="Logo"> <!-- Add your logo here -->
                <h2>Log in</h2>
            </div>
            <div class="verify">
                <p>New to Nwow AI web support?</p>
                <a href="">Verify here!</a>
            </div><br>
            <div class="input-field">    
                <input type="text" id="user" name="username" placeholder="Username/Email"><br>
                <input type="password" id="pass" name="password" placeholder="Password"><br>
                <input type="submit" id="sub" value="Log In" name="login"><br><br>
            <a href="reset.php">Forgot Password?</a>
            </div>    

        </form> 
    </div>
    <div class="footer">
        &copy; 2025 <a href="#">Privacy Policy</a> | 
        <a href="#">Report a Problem</a>
    </div>

</body>
</html>