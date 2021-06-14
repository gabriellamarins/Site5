<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);



require_once "Article.php";
require_once "Catalogue.php";
require_once "Client.php";
require_once "ListeClients.php";
require_once "Bags.php";

//nessa pagina criamos o objeto segundo a classe criada, finalmaente dando valores para os atributos

$article = new Article ('1','lorem ipsum', 50);
$article -> displayArticle();



//aqui chamamos a função que sera responsavel pela impressão
//$article->displayArticle();


$articles = new Catalogue();

$articles-> displayAllArticles();


$customer = new Client(1,2,3,4,5,6);

$customer-> displayCustomer() .'<br>';
?>

<h1> Liste de Clients </h1>

<?php
$customers_list = new ListeClients();

$customers_list-> displayAllCustomers().'<br>';
?>


<?php
$new_att = new Bags('1','lorem ipsum', 50, "", "" );
$new_att-> displayNewAttributs();
?>
