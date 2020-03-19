<?php
include('includes/fonctions.php');
if(isset($_POST['submit']) && $_POST['submit'] === 'on' ) {
var_dump($_POST);
$pseudo= htmlspecialchars($_POST['pseudo']);
$password= htmlspecialchars($_POST['password']);
$password_bis = htmlspecialchars($_POST['password_bis']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$adress = htmlspecialchars($_POST['adress']);
$postalcode = htmlspecialchars($_POST['postal_code']);
$city = htmlspecialchars($_POST['city']);
$mail = htmlspecialchars($_POST['mail']);

    if (!empty($pseudo) || !empty($password) || !empty($password_bis) || !empty($nom) || !empty($prenom) || !empty($adress) || !empty($postalcode) || !empty($city) || !empty($mail) || !empty($nom)) {
        if(strcmp($password, $password_bis) == 0) {
            if(strlen($password) > 7 ) {

                create_newClient($bdd, $pseudo, $password, $nom, $prenom, $adress, $postalcode, $city, $mail);
                header('Location: connexion.php?new');

            } else {
                echo 'Mot de passe pas assez long';
                header('Location: inscription.php?error=mdp');
            }
        } else {
            echo 'Mets deux fois le même mot de passe calice';
            header('Location: inscription.php?error=mdp1');
        }
    } else {
        echo 'Les champs sont vides';
        header('Location: inscription.php?error=empty');
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Inscription</title>
</head>
<body>

<?php include("includes/header.php"); ?>

<form method="post" action="inscription.php">
    <input type ="text" name ="pseudo" placeholder="Identifiant">
    <input type ="password" name ="password" placeholder="Mot de passe"> 
    <input type ="password" name ="password_bis" placeholder="Mot de passe bis"> 

    <input type ="text" name ="nom" placeholder="Nom de famille">
    <input type ="text" name ="prenom" placeholder="Prénom"> 
    <input type ="text" name ="adress" placeholder="Adresse postale">
    <input type ="number" min="0" name ="postal_code" placeholder="Code postal">
    <input type ="text" name ="city" placeholder="Ville">
    <input type ="email" name ="mail" placeholder="Email">

    <button type="submit" name='submit' value='on'> S'inscrire </button>
</form>

<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'mdp'){
            echo '<h1> Ton mot de passe est pas assez long troudballking </h1>';
        } else if($_GET['error'] === 'mdp1'){
            echo '<h1> Mec fous deux fois le même mot de passe tsais </h1> ';
        } else if($_GET['error'] === 'empty'){
            echo '<h1> Bah s\'il y a des champs à remplir c\'est pas pour rien tsais </h1>';
        }
    }
?>
    
</body>
</html>