<?php
//require_once 'Article.php';
include 'database.php';



insert_product($_POST["name"],$_POST["description"],$_POST["price"], $_POST['image']);
?>




    <li><?php echo $_POST['name']?></li>
    <li><?php echo $_POST['description']?> </li>
    <li><?php echo $_POST['price']?></li>
<li><?php echo $_POST['image']?></li>


