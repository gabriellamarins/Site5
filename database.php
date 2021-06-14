<?php
include "bdd.php";
require_once "Article.php";
global $products;
global $bdd;
?>



<table style="width:100%">
    <tr>
        <td>
            <h1> Liste de Produits </h1>
            <?php echo first_query() ?>
        </td>
        <td>
            <h1> Liste de Commandes </h1>
            <?php echo second_query() ?>
        </td>
        <td>
            <h1> Liste de Produits de la Commande 1 </h1>
            <?php echo tird_query() ?>
        </td>
        <td>
            <h1> Liste de Toutes les Commandes </h1>
            <?php echo forth_query() ?>
        </td>

        <td>
            <h1> INSERT new client </h1>
            <?php echo insert_client() ?>
        </td>
    </tr>

    <tr> <h1> INSERT new product </h1>
        <?php function insert_product($name,$description,$price,$image) {
            global $bdd;
            $req=$bdd->prepare('INSERT INTO products (name,description,price,image) 
VALUES ( :name,:description,:price,:image)');
            $req->execute(array('name'=>$name,'description'=>$description,'price'=>$price,'image'=>$image,));
            echo $name .  ' - produit ajouté';
            $req->closeCursor();

  }
        ?>







    </tr>

<!--    <form method="post" action="newproduct.php">-->
<!--        <p>-->
<!--            Quantité:-->
<!--        </p>-->
<!--        <select name="resort" id="">-->
<!--            --><?php //foreach ($products as $key => $sneaker) { ?>
<!--                <option value="--><?php //echo $key; ?><!--">--><?php //echo $sneaker['name']; ?><!--</option>-->
<!--            --><?php //} ?>
<!--        </select>-->
<!--        <input type="number" name="quantite" value="0"/>-->
<!--        <input type="submit" value="Valider"/>-->
<!--        <input type="hidden" name="total" value="--><?php //echo $products['price']; ?><!--"/>-->
<!--    </form>-->
<!--    --><?php //echo '<br>';

?>
</table>










