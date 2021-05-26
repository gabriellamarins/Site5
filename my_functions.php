<?php


//function formatPrice ($prix) {
//    $formatPrice = 0;
//
//    foreach ($prix as $cents) {
//        $formatPrice = $cents *200;
//    }
//    return $formatPrice;
//}
//
//echo formatPrice([0.50]) ."€";


function formatPrice ($prix)
{
    $formatPrice = $prix / 100;


    echo "Prix: " . $formatPrice . "€"."<br>";

}

function priceExcludingVAT ($prix_ttc) {

    return (100* $prix_ttc)/(100+20);

}

function displayDiscountedPrice($prix2, $discount) {
 //   $displayDiscountedPrice = $prix2 * (1-$discount/100);
    return $prix2 - ($prix2/100 * $discount);
}

