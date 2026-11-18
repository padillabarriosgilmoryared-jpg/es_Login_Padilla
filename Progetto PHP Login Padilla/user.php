<?php
    session_start();

    if(!isset($_SESSION['carrello'])){
        $_SESSION['carrello'] = [];
    }

    if(!isset($_SESSION['contatore'])){
        $_SESSION['contatore'] = 0;
    }
    
?>