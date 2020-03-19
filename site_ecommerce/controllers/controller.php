<?php
require('models/catalog_articles.php');
require_once('models/panier_mdl.php');
// session_start();

function page_index() {
    $All_articles = new Catalogue(); 
    require('views/indexView.php');
}

function page_panier() {
    require('panier.php');
    require('views/panierView.php');
}

