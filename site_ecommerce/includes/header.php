<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<nav class="navbar sticky-top">
    <a class="navbar-brand nav-title" href="index.php">Site commun</a>

    <?php if(isset($_SESSION['membre'])) { ?>
    <div class="nav_membre">
        <span><h3>Bienvenue <?=$_SESSION['membre']['pseudo']?>, j'espère que ça roule. </h3>
        <span><a href="?status=disconnect">Se déconnecter</a></span>
    </div>
    <?php }; ?>
    <div class="options_nav">
            <span class="navbar-text"><a href="<?=$GLOBALS['path_absolute'] ?>index.php"> Accueil</a></span>
            <?php if(!isset($_SESSION['membre'])) { ?>
            <span class="navbar-text"><a href="connexion.php"> Connexion</a></span>
            <?php } else { ?>
            <span class="navbar-text"><a href="commandes.php">Mes Commandes</a></span>
            <?php } ?>
            <span class="navbar-text"><a href="?page=panier"> Panier</a></span>
            <span class="navbar-text"><a href="clients.php"> Client</a></span>

    </div>
</nav>

<div class="jumbotron">
    

</div>