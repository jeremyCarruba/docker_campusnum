<?php
echo "<h1> weeeeesh igor le zouloou </h1>";
require('includes/launcher.php');
require('controllers/controller.php');

// $Test = new Catalogue;
// var_dump($Test);

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'panier') {
        page_panier();
    }
} else {
    page_index();
}
