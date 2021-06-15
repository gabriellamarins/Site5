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

</table>

<?php
//function insert_client() {
//global $bdd;
//
//$bdd->exec('INSERT INTO `cutomers` (`first_namename`, `last_name`,`tel`, `address`, `postal_code`, `city`) VALUES (Joane, Dupont, \'33-07451275\', 33 Rue des canards, 38300, Nice)');
//
//
//   echo "Client ajouté avec succès ". '<br />';




//}

//  <tr> <h1> INSERT new product </h1>-->
//      function insert_product($name,$description,$price,$image) {
//            global $bdd;
//            $insert=$bdd->prepare('INSERT INTO products (name,description,price,image)
//VALUES ( :name,:description,:price,:image)');
//            $insert->execute(array('name'=>$name,'description'=>$description,'price'=>$price,'image'=>$image,));
//            echo $name .  ' - produit ajouté';
//            $insert->closeCursor();


        ?>








<!--  <form method="post" action="newproduct.php">-->
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










