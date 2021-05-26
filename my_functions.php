<?php


function formatPrice ($prix) {
    $formatPrice = 0;

    foreach ($prix as $cents) {
        $formatPrice = $cents *200;
    }
    return $formatPrice;
}

echo formatPrice([0.50]) ."€";
