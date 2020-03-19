
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Commandes</title>
</head>
<body>

<?php

include('includes/header.php');
include('includes/fonctions.php');
?>
<div class="container">

<?php
displayPastOrders($bdd);
?>

</div>
    
</body>
</html>