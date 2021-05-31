<?php
include "my_functions.php";
//include "multidimensional-catalog.php";

echo "Quantité: ". $_POST['quantite'] ."<br>";
//var_dump ($_POST);
echo "Prix Unitaire". formatPrice($_POST['total']) ;

//$quantite = $_POST['quantite'];
//$nome_produit = [$_POST]['sneaker'];



//$tva = formatPrice($_POST['total']) - $prix_ttc;



echo "TVA Unitaire = " . (int)($_POST['total'] * 10/100/100 )."€"."<br>";
echo "Prix Total = " .(int)(($_POST['total'] * $_POST['quantite']) /100) . "€" ."<br>";



echo "TVA Total = " . tvaTotal() ."€"."<br>";

