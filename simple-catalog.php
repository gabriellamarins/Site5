<?php
$products = ["nike","veja", "puma"];
$first_item = $products[0];
$last_item = end($products);


sort ($products);
//print_r ($products);
echo $first_item . "<br>" . $last_item;
