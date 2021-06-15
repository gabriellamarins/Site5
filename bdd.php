<?php


//try{
$bdd = new PDO('mysql:host=localhost;dbname=gabriella5;charset=utf8', 'gabriella3', 'qualquercoisa');


//    $dbh = new pdo( 'mysql:host=localhost;dbname=gabriella5;charset=utf8',
//        'gabriella3',
//        'qualquercoisa',
//        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//    die(json_encode(array('outcome' => true)));
//}
//catch(PDOException $ex){
//    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
//}



global $bdd;



function first_query() {
global $bdd;

    $q1 = $bdd->query('SELECT * FROM products');

while ($donnees = $q1->fetch()){

      echo $donnees['name']. '<br />';
    }

    $q1->closeCursor();
}


?>






<?php
//Query 4 -

function second_query() {
    global $bdd;

    $q2 = $bdd->query('SELECT orders.number, orders.date FROM orders WHERE orders.date > subdate(current_date, 10)');

    while ($donnees2 = $q2->fetch()) {
        echo $donnees2['number'] . "  -   " . $donnees2['date'] . '<br />';
    }

    $q2->closeCursor();
}

?>






<?php
//Query 3 - (query 5)
function tird_query() {
   global $bdd;

    $q3 = $bdd->query('SELECT products.name, order_product.quantity, products.price FROM products JOIN order_product ON order_product.product_id = products.id WHERE order_product.order_id = 1');

    while ($donnees3 = $q3->fetch()) {
        echo $donnees3['name'] . "  -   " . $donnees3['quantity'] . $donnees3['price'] . '<br />';
    }

    $q3->closeCursor();
}
?>


<?php
//Query 4 - (query 6)

function forth_query() {
   global $bdd;
    $q4 = $bdd->query('SELECT orders.number, SUM(order_product.quantity*products.price) AS total FROM orders LEFT JOIN order_product ON orders.id = order_product.order_id LEFT JOIN products ON order_product.product_id = products.id GROUP BY orders.number');

    while ($donnees4 = $q4->fetch()) {
        echo $donnees4['number'] . '<br />';

    }

    $q4->closeCursor();
}
?>

<?php
function insert_client() {
global $bdd;

$bdd->exec('INSERT INTO `customers` (`first_name`, `last_name`,`tel`, `address`, `postal_code`, `city`) VALUES ("Joane", "Dupont", \'33-07451275\', \'33 Rue des canards\', 38300, "Nice")');


   echo "Client ajouté avec succès ". '<br />';


}


//function insert_produit()
//{
//    global $bdd;
//
//    $bdd->exec('INSERT INTO `products` (`name`, `descripition`,`price`, `image`, `weight`, `available`, `category_id`, `quantity`) VALUES (Blanc, xxx, 200, " ", 300, 1, 3, 3)');
//
//
//    echo "Nouveau produit ajouté " . '<br />';
//
//
//}


?>




