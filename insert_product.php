<?php

include 'database.php';
require_once 'Article.php'
?>
<html lang="">
<form method="post" action="newproduct.php">
    <label>
            <input type="text" name="name" placeholder="name">
            <input type="text" name="description" placeholder="description">
            <input type="number" name="price" placeholder="price" min="0">
            <input type="text" name="image" placeholder="image">

        </label>
    <button type="submit" class="btn btn-dark btn-outline-light">Créez votre produit</button>
</form>
</html>