<?php
    //ajout de la vue
    include('../vue/vue_article.php');
    //test existence des champs de formulaire nom_article et prix_article
    if(isset($_POST['nom_article']) and isset($_POST['prix_article']))
    {   
        //création des variables qui stockent les super globales POST
        $name = $_POST['nom_article'];
        $price = $_POST['prix_article'];
        //ajout de la connexion à la bdd
        include('../utils/connect.php');
        //ajout du model
        include('../model/model_article.php');
        echo '<p>ajout de l\'article qui se nomme : '.$name.' et dont le prix est de : '.$price.' €</p>';
    }
    else
    {
        echo '<p>Veuillez remplir les champs de formulaire !!! </p>';
    }
?>