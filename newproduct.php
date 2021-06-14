<?php

include 'database.php';



new_product($_POST["name"],$_POST["description"],$_POST["price"]);
?>


    <li><?php echo $_POST['name']?></li>
    <li><?php echo $_POST['description']?> </li>
    <li><?php echo $_POST['price']?></li>



