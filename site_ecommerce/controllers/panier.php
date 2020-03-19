<?php 

if(!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier;
}

if(isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $_SESSION['panier'] -> delete($id);
}

if(isset($_POST['id_panier'])){
        foreach($_POST['id_panier'] as $key=>$element){
            $new_id = $_POST['id_panier'][$key];
            $_SESSION['panier']->add($new_id);
        }
    }

if(isset($_POST['action'])){
    if($_POST['action'] === 'recalculate') {
        foreach($_SESSION['panier']->getPanier() as $key => $element) {
            $_SESSION['panier']->update($key, (int)$_POST[$key]);
        }
    } else {
        viderPanier();
    }
}

if(isset($_SESSION['panier']) && empty($_SESSION['panier']->getPanier())) {
    viderPanier();
}

if(isset($_SESSION['panier'])) {
$total = totalPanier($_SESSION['panier']);
}

