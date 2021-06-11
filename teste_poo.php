<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);



require_once "Article.php";
require_once "Catalogue.php";
require_once "ListeClients.php";
require_once "Bags.php";

//nessa pagina criamos o objeto segundo a classe criada, finalmaente dando valores para os atributos

$article = new Article ("Handbag", "lorem ipsum", 100, 'big', 'azul'.'<br>' );




//aqui chamamos a função que sera responsavel pela impressão
$article->displayArticle();


$articles = new Catalogue();

$articles-> displayAllArticles();
?>



<h1> Liste de Clients </h1>

<?php
$customers_list = new ListeClients();

$customers_list-> displayAllCustomers();
?>


<?php
$size_bag = new Bags("Handbag", "lorem ipsum", 100, 'big', 'x'.'<br>');

$size_bag-> getColor();
?>
