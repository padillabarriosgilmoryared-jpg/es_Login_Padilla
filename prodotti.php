<?php
    include 'user.php';
    if (!isset($_SESSION['utente_corrente'])) {
        header("Location: login.php");
        exit;
    }else{
    }

    $catalogo = [
        1 => ['nome' => 'Laptop', 'prezzo' => 450],
        2 => ['nome' => 'Phone', 'prezzo' => 240],
        3 => ['nome' => 'Tablet', 'prezzo' => 200],
        4 => ['nome' => 'Headphones', 'prezzo' => 75],
    ];

    if(isset($_POST['add'])){
        $id = $_POST['add'];

        if(isset($catalogo[$id])){
            $_SESSION['carrello'][] = [
                'id' => $id,
                'nome' => $catalogo[$id]['nome'],
                'prezzo' => $catalogo[$id]['prezzo']
            ];

            $_SESSION['contatore']++;
        }
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
    <h1>Benvenuto, <?php echo $nomeUtente?>!</h1>
    <h2>Carrello: <?php echo $_SESSION['contatore']?> prodotti</h2>
    <a href="carrello.php">Carrello</a>
    <a href="logout.php">Logout</a>
    <br>
    <form method="POST">
    <label>
        Laptop 450
    </label><button name="add" value="1">Aggiungi al Carrello</button>
    <br>
    <label>
        Phone 240
    </label><button name="add" value="2">Aggiungi al Carrello</button>
    <br>
    <label>
        Tablet 200
    </label><button name="add" value="3">Aggiungi al Carrello</button>
    <br>
    <label>
        Headphones 75
    </label><button name="add" value="4">Aggiungi al Carrello</button>
</form>
</body>
</html>