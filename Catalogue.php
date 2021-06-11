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



//    public function displayAllArticles () {
//        print_r ($this->allArticles);
//    }

//

public function displayAllArticles () {
    foreach ($this->allArticles as $articles) {
//               var_dump($articles) ;
     echo $articles['name'] .'<br>'  ;
     echo $articles['description'].'<br>'  ;
        echo $articles['price']. '€'.'<br>'  ;
        echo '<img src='.$articles['image']. 'alt="" width="200">' .'<br>';
        echo $articles['weight']. ' g'.'<br>'  ;
        echo $articles['avaliable']. ' - available' . '<br>'  ;
        echo $articles['category_id']. ' category'.'<br>'  ;
        echo $articles['quantity']. ' - units' . '<br>'  .'<br>' .'<br>' ;

    }
//       $articles->displayArticle();
    }

    }