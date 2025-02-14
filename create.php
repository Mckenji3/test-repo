<?php
require('./database.php');

if (isset($_POST['Register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $queryCreate = "INSERT INTO accounts (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $queryCreate);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ss', $username, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Successfully created!")</script>';
            echo '<script>window.location.href = "/crud-dev/index.php"</script>';
            exit();
        } else {
            echo '<script>alert("Account creation failed!")</script>';
        }

        mysqli_stmt_close($stmt);
    } else {
        echo '<script>alert("Database error!")</script>';
    }
} else {
    header('Location: /crud-dev/index.php');
    exit();
}
?>
