

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Clients</title>
</head>
<body>

<?php 
      include("includes/header.php");
      include("includes/fonctions.php");
?>

    
</body>
</html>

<?php
$All_clients = new ListeClients();
displayClient($All_clients);
?>