<?php
    include 'user.php';

    session_unset();
    session_destroy();

    header("Location: login.php");
    exit;
?>