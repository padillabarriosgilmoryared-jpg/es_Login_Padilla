<?php
    include 'user.php';

    if(isset($_POST['login'])){
        $_SESSION['utente_corrente'] = $_POST['username'];
        $_SESSION['password_corrente'] = $_POST['password'];
        header("Location: prodotti.php");
        exit;
    }

    if(isset($_SESSION['utente_corrente'])){
        if(($_SESSION['utente_corrente'] == "pippo" && $_SESSION['password_corrente'] == "pippo") || ($_SESSION['utente_corrente'] == "pluto" && $_SESSION['password_corrente'] == "pluto") || ($_SESSION['utente_corrente'] == "paperino" && $_SESSION['password_corrente'] == "paperino")){
            header("Location: prodotti.php");
            exit;
        }else{
            echo "Nome utente o password non disponibili...";
            header("Refresh:0");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">
            Inserisci nome utente:  
        </label>
        <input type="text" name="username">
        <br>
        <br>
        <label for="password">
            Inserisci password:   
        </label>
        <input type="text" name="password">
        
        <button name="login">Login</button>
    </form>
</body>
</html>