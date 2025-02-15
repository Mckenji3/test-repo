<?php 

    session_start();

    $_SESSION['status'] = 'invalid';

    unset($_SESSION['username']);

    echo "<script>window.location.href = '/crud-dev/login.php'</script>";
    

?>
