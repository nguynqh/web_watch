<?php
    session_start();
    unset($_SESSION['login_admin']);
    header('location: ../login1.php');
?>