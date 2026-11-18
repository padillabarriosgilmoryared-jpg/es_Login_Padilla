<?php
    include 'user.php';

    if(isset($_SESSION['utente_corrente'])){
        header("Location: prodotti.php");
    }else{
        header("Location: login.php");
    }
    exit;
?>