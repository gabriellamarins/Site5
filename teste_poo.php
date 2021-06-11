<?php
require_once "Article.php";
require_once "Catalogue.php";

//nessa pagina criamos o objeto segundo a classe criada, finalmaente dando valores para os atributos

$article = new Article ("Product1", "lorem ipsum", 100, 500);



//aqui chamamos a função que sera responsavel pela impressão
$article->displayArticle();


$articles = new Catalogue();

$articles-> displayAllArticles();
