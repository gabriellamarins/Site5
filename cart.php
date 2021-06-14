<?php
include "my_functions.php";

//include "multidimensional-catalog.php";

if (!is_numeric($_POST['total']) or !is_numeric($_POST['quantite'])) {
    header('http://localhost/multidimensional-catalog.php', false);
    exit ();
}


echo "Quantité: ". $_POST['quantite'] ."<br>";

echo "Prix Unitaire". formatPrice($_POST['total']) ;




echo "TVA Unitaire = " . (int)($_POST['total'] * 10 / 100 / 100) . "€" . "<br>";
echo "Prix Total = " . (int)(($_POST['total'] * $_POST['quantite']) / 100) . "€" . "<br>";



echo "TVA Total = " . tvaTotal() ."€"."<br>";

