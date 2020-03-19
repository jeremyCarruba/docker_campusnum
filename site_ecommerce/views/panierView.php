
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?=$GLOBALS['path_absolute']?>design/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$GLOBALS['path_absolute'] ?>design/css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
</head>
<body>

<?php include('includes/header.php') ?>

<div class ="container">
    <div class ="tableau_disque">
    <form action="?page=panier" method="post">

        <?php 
        if (isset($_SESSION['panier'])) {
            displayPanier($_SESSION['panier']);
        ?>

        <div class="card text-white bg-primary mb-3 text-right float-right" style="max-width: 18rem;">
        <div class="card-header">Total</div>
        <div class="card-body">
            <h5 class="card-title">Prix des articles</h5>
            <p class="card-text"><?=$total?> $</p>
            <input type="hidden" name="total" value ="<?=$total?>">
        </div>
    </div>

    <button type="submit" name="action" value="recalculate">Recalculer</button>
    <button type="submit" name="action" value="empty">Vider le panier</button>

    </form>
    </div>

</div>

    <?php
    } else {
    ?>
        <h1> Votre panier est vide </h1>

    <?php
    }
    ?>

<a href="<?=$GLOBALS['path_absolute'] ?>"> Retour Accueil </a>

</body>
</html>