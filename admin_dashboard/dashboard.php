<?php 

    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {

        $_SESSION['status'] = 'invalid';

        unset($_SESSION['username']);

        echo "<script>window.location.href = ''</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu -->
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="dashboard.php">Dashboard</a>
        <a href="users.php">User Management</a>
        <a href="#">Settings</a>
        <a href="">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Welcome to the Admin Dashboard</h2>
        <p>Select an option from the menu.</p>
    </div>

</body>
</html>
