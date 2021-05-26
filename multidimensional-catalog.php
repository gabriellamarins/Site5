<?php
include "header.php";
include "my_functions.php";?>



<?php
$products = [

    'nike' => [
        'name' => 'SuperX',
        'price' => 20000,
        'weight' => 400,
        'discount' => 10,
        'picture' => 'https://images-na.ssl-images-amazon.com/images/I/81xDzahd9PL._AC_UX500_.jpg'
    ],


'puma' => [
    'name' => 'AmazingX',
    'price' => 33000,
    'weight' => 400,
    'discount' => 10,
    'picture' => 'https://images-na.ssl-images-amazon.com/images/I/819tIj8wVmL._AC_UX395_.jpg',

],

'veja' => [
    'name' => 'GreatX',
    'price' => 42000,
    'weight' => 400,
    'discount' => 10,
    'picture' => 'https://m.media-amazon.com/images/I/61v5ACBpE-L._AC_SX395._SX._UX._SY._UY_.jpg',
],
];
?>


<html lang="english">
<head>
    <title>
        Catalogue
    </title>
</head>
<body>
<h1 style>
    Sneakers
</h1>

<?php
//var_dump($products)?>

<table style="width:100%">
    <tr>
        <th>Nike <?php echo $products ['nike']['name'] ?> </th>
        <th>Puma <?php echo $products ['puma']['name']?> </th>
        <th>Veja <?php echo $products ['veja']['name'] ?> </th>
    </tr>
    <tr>
        <td> <img src='<?php echo $products ['nike']['picture']?>' width = "400" alt="white nike shoes"></td>
        <td> <img src='<?php echo $products ['puma']['picture']?>' width = "400" alt="white puma shoes"></td>
        <td> <img src='<?php echo $products ['veja']['picture']?>' width = "400" alt="white veja shoes"></td>
    </tr>
    <tr>
        <td> Prix: <?php echo $products ['nike']['price']?>  </td>
        <td> Prix: <?php echo $products ['puma'] ['price']?>  </td>
        <td> Prix: <?php echo $products ['veja'] ['price']?>  </td>
    </tr>
    <tr>
        <td> Reduction: <?php echo $products ['nike'] ['discount'] ?> %</td> <!--como botar o % fora do php e adiciona-lo sem precisar fazer uma concatenaçao-->
        <td> Reduction: <?php echo $products ['puma'] ['discount'] ?> %</td>
        <td> Reduction: <?php echo $products ['veja']['discount'] ?> % </td>
    </tr>
</table>




<h6> Liste de Produits 1 (for)</h6>
<?php
//var_dump($products[0]);
//$keys = ['nike','puma', 'veja'];



$keys = array_keys ($products);
//var_dump ($keys);

for ($i = 0; $i < count ($products); $i=$i+1) {

     echo "<li>".$keys[$i]."</li>";
     echo "Modèle:  " . $products [$keys[$i]]["name"]."<br>";
     formatPrice($products [$keys[$i]]["price"]);
    formatPrice (priceExcludingVAT ($products [$keys[$i]]["price"]));
     echo "Poids:  " .$products [$keys[$i]] ["weight"]. "g"."<br>";
     echo "Réduction:  " .$products [$keys[$i]] ["discount"]. "%"."<br>";
     echo "<img src = \"" .$products [$keys[$i]] ["picture"]. "\"alt = \"''\"  width = \"''\">";

//    echo <img src = '<?php echo $products [$keys[$i]] ["picture"]


}
?>
<br>
<br>


<h6> Liste de Produits 2 (foreach) </h6>
<?php
//var_dump($keys);

//foreach ($products as  $key1 => $value2) { //precisa sempre fazer em dois tempos, mostrar a primeira tabela primeiro
// //
 // var_dump ($key1['name']);
//    var_dump($value2);
//
//    echo $value2."<br>";

//  foreach ($products as $key1 => $value2) {
//      var_dump ($key1['name']);
//      echo $key1;
// if($key1== 'picture') {
//
//echo "<img src='" . $value2 . "' alt = ''/>";
//}
//}
?>

<?php
//echo $key1 . "<br>";
//echo $keys;
//    foreach ($key1 as $key2 => $value2) { // pra depois poder entrar nos detalhes de cada tabela
//         echo "<br>"."debut de boucle foreach" ."<br>";
//        var_dump ($key2);
//        var_dump ($value2);
//        if ($key2 == 'price') {
//            formatPrice($products [$value2]["price"]);
//        }
//        else if ($key2 == 'picture') {
////        echo "<img src = \"" . $value2 . "\" alt = \"''\"  width = \"''\"/>";
//            echo "<img src='" . $value2 . "' alt = ''/>";
//        }
//        else {
////            echo $value2;
//        }
//


 //   }




?>
<br>
<br>

<h6> Liste de Produits 3 (while)</h6>
<?php

$i = 0;
while($i < count ($products)) {
 //   $product= $products [$i];
   // $keys[$i];
    echo "<li>$keys[$i]</li>";
    echo "Modèle:  " . $products [$keys[$i]]["name"]."<br>";
    formatPrice($products [$keys[$i]]["price"])."<br>";
    formatPrice (priceExcludingVAT ($products [$keys[$i]]["price"]));
    echo "Poids:  " .$products [$keys[$i]] ["weight"]. "g"."<br>";
    echo "Réduction:  " .$products [$keys[$i]] ["discount"]. "%"."<br>";
    echo "<img src = \"" .$products [$keys[$i]] ["picture"]. "\"alt = \"''\"  width = \"''\">";
$i = $i+1;
}
?>
<br>
<br>


<h6> Liste de Produits 4 (do while)</h6>
<?php
$i = 0;
do{
 //   $product = $products [$i];

    echo "<li>$keys[$i]</li>";
    echo "Modèle:  " . $products [$keys[$i]]["name"]."<br>";
    formatPrice($products [$keys[$i]]["price"]);
    formatPrice (priceExcludingVAT ($products [$keys[$i]]["price"]));
    echo "Poids:  " .$products [$keys[$i]] ["weight"]. "g"."<br>";
    echo "Réduction:  " .$products [$keys[$i]] ["discount"]. "%"."<br>";
    echo "<img src = \"" .$products [$keys[$i]] ["picture"]. "\"alt = \"''\"  width = \"''\">";
    $i= $i+1;
}
while($i < count ($products));
?>
<br>
<br>


</body>

<?php

include "footer.php"?>
</html>

