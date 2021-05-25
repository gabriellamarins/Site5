<?php
include "header.php"?>



<?php
$products = [

    'nike' => [
        'name' => 'SuperX',
        'price' => 200,
        'weight' => 400,
        'discount' => 10,
        'picture' => 'https://images-na.ssl-images-amazon.com/images/I/81xDzahd9PL._AC_UX500_.jpg'
    ],


'puma' => [
    'name' => 'AmazingX',
    'price' => 200,
    'weight' => 400,
    'discount' => 10,
    'picture' => 'https://images-na.ssl-images-amazon.com/images/I/819tIj8wVmL._AC_UX395_.jpg',

],

'veja' => [
    'name' => 'GreatX',
    'price' => 200,
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
        <td> Prix: <?php echo $products ['nike']['price']?> € </td>
        <td> Prix: <?php echo $products ['puma'] ['price']?> € </td>
        <td> Prix: <?php echo $products ['veja'] ['price']?> € </td>
    </tr>
    <tr>
        <td> Reduction: <?php echo $products ['nike'] ['discount'] ?> %</td> <!--como botar o % fora do php e adiciona-lo sem precisar fazer uma concatenaçao-->
        <td> Reduction: <?php echo $products ['puma'] ['discount'] ?> %</td>
        <td> Reduction: <?php echo $products ['veja']['discount'] ?> % </td>
    </tr>
</table>


<h6> Liste de Produits 1</h6>


<?php
//var_dump($products[0]);
//$keys = ['nike','puma', 'veja'];



$keys = array_keys ($products);
//var_dump ($keys);

for ($i = 0; $i < count ($products); $i=$i+1) {

     echo "<li>".$keys[$i]."</li>";
     echo "Modèle:  " . $products [$keys[$i]]["name"]."<br>";
     echo "Prix:  " .$products [$keys[$i]]["price"]. "€"."<br>";
     echo "Poids:  " .$products [$keys[$i]] ["weight"]. "g"."<br>";
     echo "Réduction:  " .$products [$keys[$i]] ["discount"]. "%"."<br>";
     echo "<img src = \"" .$products [$keys[$i]] ["picture"]. "\"alt = \"''\"  width = \"''\">";


//    $keys = $products [$i];
     //print_r (array_keys($products));
//    echo <img src = '<?php echo $products [$keys[$i]] ["picture"]


}
?>
<br>
<br>


<h6> Liste de Produits 2</h6>
<?php
//var_dump($keys);
foreach ($products as  $key1 => $value1 ) { //precisa sempre fazer em dois tempos, mostrar a primeira tabela primeiro
echo $key1 . "<br>";
foreach ($value1 as $key2 => $value2 ) { // pra depois poder entrar nos detalhes de cada tabela
    if ($key2 == 'picture') {
//        echo "<img src = \"" . $value2 . "\" alt = \"''\"  width = \"''\"/>";
        echo "<img src='" . $value2 . "' alt = 'x'/>";
    }
    echo $value2 . "<br>";
    }
//    echo $value2;

//    echo "Modèle:  " . $products ['$keys']["name"]."<br>";
}
?>
<br>
<br>

<h6> Liste de Produits 3</h6>
<?php
//
//$i = 0;
//while($i < count ($products)) {
//    $product= $products [$i];
//    $i = $i+1;
//    echo "<li>$product</li>";
//}
//
//?>
<br>
<br>



<?php
//$i = 0;
//do{
//    $product = $products [$i];
//    $i= $i+1;
//    echo "" . $product . "<br>";
//}
//while($i < count ($products));
//?>
<br>
<br>


</body>


<?php
include "footer.php"?>
</html>

