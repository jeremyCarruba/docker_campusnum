<?php 
include('includes/header.php');
include("includes/fonctions.php");
var_dump($_POST);

if(isset($_POST['action']) && $_POST['action'] == 'connexion') {
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $pseudo = $_POST['pseudo'];
        $password = password_hashed($_POST['password'], PASSWORD_DEFAULT);

        connexion_client($bdd, $pseudo, $password);

    } else {
        echo 'Mec cest vide';
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
    <title>Connexion</title>
</head>
<body>

<form method="post" action="connexion.php">
    <input type ="text" name="pseudo" id="pseudo" placeholder="Identifiant"></input>
    <input type ="password" name="password" id="password" placeholder="Mot de passe"></input>

    <button type ="submit" name="action" value="connexion"> Se connecter </button>
</form>

<div>
<?php 
    if(isset($_GET['new'])) {
        echo '<h1> Inscription réussi maintenant connecte toi mon conio </h1>';
    } else {
?>
    <h2> Vous n'avez pas encore de compte ? Creez en un tabarnak ! </h2>
    <a href ="inscription.php"><img src = "<?=$path_absolute?>media/icons/inscription.png"/></a>
</div>
    
    <?php } ?>
</body>
</html>