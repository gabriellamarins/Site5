<?php
include "bdd.php";
require_once "Article.php";
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
            <h1> INSERT new product </h1>
            <?php echo insert_query() ?>
        </td>
    </tr>

<tr>

</tr>


</table>










