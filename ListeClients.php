<?php

require_once "bdd.php";

global $bdd;
class ListeClients
{
    public array $allCustomers = [];

    public function __construct()
    {

        global $bdd;

        $query_customers = $bdd->query('SELECT * FROM customers');

        while ($donnees = $query_customers->fetch()) {

            array_push($this->allCustomers, $donnees) . '<br />';


        }

        $query_customers->closeCursor();
    }


    public function displayAllCustomers () {
        foreach ($this->allCustomers as $customers) {
            echo $customers['first_name'];
            echo ' '. $customers['last_name']. '<br>';
            echo $customers['tel']. '<br>' ;
            echo $customers['address']. '<br>' ;
            echo $customers['postal_code']. '<br>' ;
            echo $customers['city']. '<br>' . '<br>' ;
        }
    }



}

