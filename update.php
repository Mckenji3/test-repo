<?php
require('./database.php');

$editId = $editUsername = $editPassword = '';
$updateId = $updateUsername = $updatePassword = '';

if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
}

if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = password_hash($_POST['updatePassword'], PASSWORD_DEFAULT); // Hash the password

    // Use prepared statements to prevent SQL injection
    $queryUpdate = "UPDATE accounts SET username = ?, password = ? WHERE id = ?";
    $stmt = mysqli_prepare($connection, $queryUpdate);
    mysqli_stmt_bind_param($stmt, 'ssi', $updateUsername, $updatePassword, $updateId);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Successfully updated!")</script>';
        echo '<script>window.location.href = "/crud-dev/userData.php"</script>';
        exit();
    } else {
        echo '<script>alert("Update failed!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 40vh;
            font-family: Arial, sans-serif;
        }

        .update-main {
            margin-bottom: 20px;
        }

        .update-main input[type="text"],
        .update-main input[type="password"] {
            padding: 8px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .update-main input[type="submit"] {
            padding: 8px 83px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 6px;
        }

        .update-main input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<a href="userData.php">Back</a>
    <div class="main">
        <form class="update-main" action="/crud-dev/update.php" method="post">
            <input type="text" name="updateUsername" placeholder="Enter your username" value="<?php echo htmlspecialchars($editUsername); ?>" required /> <br>
            <input type="password" name="updatePassword" placeholder="Enter your password" required /> <br>
            <input type="submit" name="update" value="UPDATE" />
            <input type="hidden" name="updateId" value="<?php echo htmlspecialchars($editId); ?>" />
        </form>
    </div>
</body>
</html>