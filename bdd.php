<?php


function queries() {

      return $bdd = new PDO('mysql:host=localhost;dbname=gabriella_bdd;charset=utf8', 'gabriella38', 'qualauercoisa');

}


function first_query() {
$bdd = queries();

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
    $bdd = queries();

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
    $bdd = queries();

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
    $bdd = queries();
    $q4 = $bdd->query('SELECT orders.number, SUM(order_product.quantity*products.price) AS total FROM orders LEFT JOIN order_product ON orders.id = order_product.order_id LEFT JOIN products ON order_product.product_id = products.id GROUP BY orders.number');

    while ($donnees4 = $q4->fetch()) {
        echo $donnees4['number'] . '<br />';

    }

    $q4->closeCursor();
}
?>

<?php
function insert_query( $id, $date, $customer, $number) {
$bdd = queries();

$q5 = $bdd->query('INSERT INTO `orders` (`id`, `date`, `customer_id`,`number` ) VALUES (:date, )');

$q5

}
echo "nouveau produit ajouté" ;
}


?>




