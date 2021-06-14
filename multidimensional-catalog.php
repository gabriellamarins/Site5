<?php
include "header.php";
include "my_functions.php";
include "Liste_produits.php";

global $products;
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


<table style="width:100%">
    <tr>
        <th>Nike <?php echo $products ['nike']['name'] ?> </th>
        <th>Puma <?php echo $products ['puma']['name'] ?> </th>
        <th>Veja <?php echo $products ['veja']['name'] ?> </th>
    </tr>
    <tr>
        <td><img src='<?php echo $products ['nike']['picture'] ?>' width="400" alt="white nike shoes"></td>
        <td><img src='<?php echo $products ['puma']['picture'] ?>' width="400" alt="white puma shoes"></td>
        <td><img src='<?php echo $products ['veja']['picture'] ?>' width="400" alt="white veja shoes"></td>
    </tr>
    <tr>
        <td> Prix: <?php echo $products ['nike']['price'] ?>  </td>
        <td> Prix: <?php echo $products ['puma'] ['price'] ?>  </td>
        <td> Prix: <?php echo $products ['veja'] ['price'] ?>  </td>
    </tr>
    <tr>
        <td> Prix HT: <?php echo $products ['nike'] ['discount'] ?> </td>
        <td> Prix HT: <?php echo $products ['puma'] ['discount'] ?> </td>
        <td> Prix HT: <?php echo $products ['veja']['discount'] ?> </td>
    </tr>
</table>


<h6> Liste de Produits 2 (foreach) </h6>
<?php


foreach ($products as $product => $items) { //precisa sempre fazer em dois tempos, mostrar a primeira tabela primeiro

    echo $items['name'] . "<br>";
    foreach ($items as $items2 => $item) {
        if ($items2 == 'picture')
            echo "<img src='" . $item . "' alt = ''/>" . "<br>";
    }
    echo "Prix Unitaire: " . formatPrice($items['price']) . "<br>";
    ?>

<!--    --><?php //echo $tva = "TVA= " . (formatPrice($items['price'] * 10 / 100));
////echo $tva;?>


    <form method="post" action="cart.php">
        <p>
            Quantité:
        </p>
        <select name="resort" id="">
            <?php foreach ($products as $key => $sneaker) { ?>
                <option value="<?php echo $key; ?>"><?php echo $sneaker['name']; ?></option>
            <?php } ?>
        </select>
        <input type="number" name="quantite" value="0"/>
        <input type="submit" value="Valider"/>
        <input type="hidden" name="total" value="<?php echo $items['price']; ?>"/>
    </form>
    <?php echo '<br>';
}
?>



<h4>
    Mon Produit
</h4>
<p> Prix: </p>


</body>
<?php

include "footer.php" ?>
</html>

