<?php

require_once "bdd.php";
require_once "Article.php";
require_once "Bags.php";

global $bdd;



class Catalogue {


    public array $allArticles = [];

    public function __construct () {

        global $bdd;

        $allArticles = $bdd->query('SELECT * FROM products');

//        while ($donnees = $q1->fetch()){
//
//           array_push ($this->allArticles, $donnees). '<br />';
        foreach($allArticles as $article){
            $a=new Article($article['name'],$article['description'],$article['price']);
            array_push($this->allArticles,$a);
        }
        $allArticles->fetchAll(Pdo::FETCH_ASSOC);
    }

    public function displayAllArticles(){
        foreach($this->allArticles as $article){
            $article->displayArticle();
        }
    }



//        $q1->closeCursor();





//public function displayAllArticles () {
//    foreach ($this->allArticles as $articles) {
////               var_dump($articles) ;
//         echo $articles['name'] .'<br>'  ;
//         echo $articles['description'].'<br>'  ;
//         echo $articles['price']. '€'.'<br>'  ;
//         echo '<img src='.$articles['image']. 'alt="" width="200">' .'<br>';
//         echo $articles['weight']. ' g'.'<br>'  ;
//         echo $articles['available']. ' - available' . '<br>'  ;
//         echo $articles['category_id']. ' category'.'<br>'  ;
//         echo $articles['quantity']. ' - units' . '<br>'  .'<br>' .'<br>' ;
//
//    }
////       $articles->displayArticle();


    }