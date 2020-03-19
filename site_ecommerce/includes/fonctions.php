<?php

/***** DISPLAY ******/

function displayArticlePOO($Article){

    $type = get_class($Article);

?>
    <tr class="<?=$type?>">
     <td class="col_cover"><img class="cover_disk" src ="<?= $Article->getImage() ?>" height = "200px" alt ="blablabla"/> </td>
    <td> <?= $Article->getArtist()?></td>
    <td> <?= $Article->getName()?></td>
    <td> <?= $Article->getPrice()?> Euros </td>
    <td>
        <div class="form-check">
        <input type="checkbox" id ="article_select" class="form-check-input" name="id_panier[]" value ="<?=$Article->getId()?>">
        <label class ="form-check-label" for="article_select">Acheter</label>
        </div>
        
    </td>

    </tr>
    
    <?php
}

function displayClientPOO($Article){
?>
    <tr>
    <td> <?= $Article->getName()?></td>
    <td> <?= $Article->getPseudo()?></td>
    <td> <?= $Article->getAdress()?></td>
    <td>
        
    </td>

    </tr>
    
    <?php
}

function displayCat($object) {
    form_tableau('Titre', 'Artiste', 'Prix');

    foreach($object->getArticles() as $key => $element) {
        displayArticlePOO($element);
    }
    form_tableaufin();
}

function displayPanier($Panier) {
    tableau_panier();
    foreach($Panier->getPanier() as $key => $element) {
        $sql = "SELECT id, name, artist, price, image FROM products WHERE id= :id";
        $stmt = $Panier -> connect() -> prepare($sql);
        $stmt->execute(array(
            ':id' => $key
        ));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        afficherArticle_panier($result, $element['quantity']);
    }
    echo '</table>
    </div>';
}

function displayClient($object) {
    foreach($object->getClientList() as $key => $element) {
        displayClientPOO($element);
        echo '<br>';
    }
}

/****** MISE EN FORME *****/

function form_tableau($element, $element1, $element2) {
    echo '
    <div class="tableau_article">
    <table class="table table-dark table-striped">
    <thead class = "thead-dark">
        <tr>
        <th scope="col"></th>
        <th scope="col">'.$element.'</th>
        <th scope="col">'.$element1.'</th>
        <th scope="col">'.$element2.'</th>
    </tr>
    </thead>
    ';
}

function form_tableaufin ()
{
    echo '
    </table>
    </div>
    ';
}


function afficherArticle_panier($article, $quantity) {
    echo '
        <tr>
         <td class="col_cover"><img class="cover_disk" src =" ' . $article['image'] . '" alt ="blablabla" height ="200px"/> </td>
        <td>  ' . $article['artist']  . '</td>
        <td>  ' . $article['name'] . '</td>
        <td>   ' . $article['price'] . ' Euros </td>
        <td>
        <div class="form-group">
        <label for="quantite_article"> Quantité </label>
        <input type ="number" id="quantite_article_' . $article['id'] . '" name="' . $article['id'] . '" value ="' . $quantity .'" min="1" class="col-3">
        </div>
        <div class="form-row">
        <button type="submit" name="delete" value ="'.$article['id'].'"> Supprimer </button>
        </div>    
        </td>


        </tr>
        <br/>';
}

function tableau_panier()
{ ?>

        <div class="tableau_article">
        <table class="table table-dark table-striped">
        <thead class = "thead-dark">
            <tr>
            <th scope="col"></th>
            <th scope="col">Artiste</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col"></th>
</tr>
</thead>

<?php
}

/******* CALCUL *****/

function totalPanier($Panier) {
    $total = 0;

    foreach($Panier -> getPanier() as $key => $element) {
        $total = $total + ($element['quantity'] * $Panier->getPrice($key));
    }
    return $total;
}

function viderPanier() {
    unset($_SESSION['panier']);
}

?>