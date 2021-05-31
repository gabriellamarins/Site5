<?php
include "my_functions.php";


echo "Quantité: ". $_POST['quantite'] ."<br>";
//var_dump ($_POST);
formatPrice($_POST['total']) ."<br>";




//$tva = formatPrice($_POST['total']) - $prix_ttc;



echo "TVA Unitaire = " . (int)($_POST['total'] * 10/100/100 )."€"."<br>";
echo "Prix Total = " .(int)(($_POST['total'] * $_POST['quantite']) /100) . "€" ."<br>";
echo "TVA Total = " . (int)(($_POST['total'] * $_POST['quantite']) * 10/100/100 )."€"."<br>";

