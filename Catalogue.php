<?php
require_once "bdd.php";

global $bdd;



class Catalogue {


    public array $allArticles = [];

    public function __construct () {

        global $bdd;

        $q1 = $bdd->query('SELECT * FROM products');

        while ($donnees = $q1->fetch()){

//            return ($donnees['name']);
           array_push ($this->allArticles, $donnees). '<br />';

//            var_dump($donnees['name']);
//
//            $products = new ($donnees ['name']);
//            $this->addProducts($products);


        }

        $q1->closeCursor();
//
//        $allArticles->query('SELECT * FROM products');
//        return $allArticles;
//        var_dump ($allArticles);
    }



    public function displayAllArticles () {
        print_r ($this->allArticles);
    }

//
//public function displayAllArticles () {
//    foreach ($this->allArticles as $articles) {
//        $articles->displayArticle();
//    }

    }