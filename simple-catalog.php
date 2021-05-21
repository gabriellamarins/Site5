<?php
include "header.php"?>



<?php
$products = ["nike","veja", "puma"];
//print_r ($products);
$first_item = $products[0];
$last_item = end($products);



sort ($products) ."<br>";
//print_r ($products);
echo $first_item . "<br>" . $last_item;
?>

<html lang="english">
    <head>
        <title>
            Simple-Catalog
        </title>
    </head>


    <body>
    <h1 style>
        Catalogue
    </h1>
    <br>
    <br>

<h6> Liste de Produits 1</h6>
<?php
for ($i = 0; $i < count ($products); $i=$i+1) {
       $product = $products[$i];
       echo "<li>$product</li>";
}
?>

<br>
<br>


    <h6> Liste de Produits 2</h6>
<?php

foreach ($products as $product) {
  echo "<li>$product</li>";
}
?>
    <br>
    <br>

    <h6> Liste de Produits 3</h6>
<?php

$i = 0;
     while($i < count ($products)) {
            $product= $products [$i];
            $i = $i+1;
            echo "<li>$product</li>";
     }

?>
    <br>
    <br>


    <?php
    $i = 0;
    do{
        $product = $products [$i];
        $i= $i+1;
        echo "" . $product . "<br>";
    }
    while($i < count ($products));
    ?>
<br>
<br>

<?php
include "footer.php" ?>

    </body>
</html>