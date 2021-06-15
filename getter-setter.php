<?php
require_once "bdd.php";
global $bdd;

$insert= $bdd->exec('INSERT INTO `order_product` (`id`, `quantity`, `order_id`, `product_id`) (VALUES (11,3,3,10)');

