<?php
    require('./database.php');

    if (isset($_POST['delete'])) {
        $deleteId = $_POST['deleteId'];

        $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
        $sqlDelete = mysqli_query($connection, $queryDelete);
        
        echo '<script>alert("Successfully deleted!")</script>';
        echo '<script>window.location.href = "/crud-dev/userData.php"</script>';
    }else {
        echo '<script>window.location.href = "/crud-dev/userData.php"</script>';
    }
?>