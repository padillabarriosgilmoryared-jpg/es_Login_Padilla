<?php
    session_start();
    if(!isset($_SESSION['utente'])){
        $_SESSION['utente'] = [];
    }

    if(!isset($_SESSION['password'])){
        $_SESSION['password'] = [];
    }

    if(!isset($_SESSION['prodotti'])){
        $_SESSION['prodotti'] = [];
    }

    if(!isset($_SESSION['carrello'])){
        $_SESSION['carrello'] = [];
    }

    if(!isset($_SESSION['contatore'])){
        $_SESSION['contatore'] = 0;
    }
    
?>