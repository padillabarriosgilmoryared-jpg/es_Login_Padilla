<?php
    include 'user.php';
    if (!isset($_SESSION['utente_corrente'])) {
        header("Location: login.php");
        exit;
    }else{
        
    }

    if(isset($_POST['svuota'])){
        $_SESSION['carrello'] = [];
        $_SESSION['contatore'] = 0;
        header("Location: carrello.php");
        exit;
    }

    $totale = 0;
    $i = 0;
    if(count($_SESSION['carrello']) > 0){
        do{
            $totale =$totale + $_SESSION['carrello'][$i]['prezzo'];
            $i++;
        }while($i < count($_SESSION['carrello']));
}

    $nomeUtente = ($_SESSION['utente_corrente']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carrello di <?php echo $nomeUtente?></h1>
    <a href="prodotti.php">Prodotti</a>
    <a href="logout.php">Logout</a>
    <br>
    <br>
    <?php
        if(count($_SESSION['carrello']) == 0){
            echo 'Il carrello è vuoto.';
        }else{
            $i = 0;
            do{
                $prodotto = $_SESSION['carrello'][$i];
                echo ($prodotto['nome']) . ' - ' . $prodotto['prezzo'] . '<br>';
                $i++;
            }while($i < count($_SESSION['carrello']));
        }
    ?>
    <h2>Totale: <?php echo $totale?></h2>
    <form method="POST">
        <button name="svuota">Svuota Carrello</button>
    </form>
</body>
</html>