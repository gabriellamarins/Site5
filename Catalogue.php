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
            if($article['size']!= '' or $article['color']!='') {
                $x = new Bags($article['name'], $article['description'], $article['price'], $article['size'], $article['color']);
                array_push($this->allArticles, $x);
            } else {
                $x = new Article($article['name'], $article['description'], $article['price']);
                array_push($this->allArticles, $x);
            }
        }
        $allArticles->fetchAll(Pdo::FETCH_ASSOC);

        }
//            $a=new Article($article['name'],$article['description'],$article['price']);
//            array_push($this->allArticles,$a);
//        }
//        $allArticles->fetchAll(Pdo::FETCH_ASSOC);
//    }
//
    public function displayAllArticles(){
        foreach($this->allArticles as $article){

            if ($article instanceof Bags) {
                $article->displayNewAttributes();
            } else {
                $article->displayArticle();
            }

        }
    }




    }