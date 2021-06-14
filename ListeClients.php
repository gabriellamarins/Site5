<?php

require_once "bdd.php";
require_once "Client.php";

global $bdd;
class ListeClients
{
    public array $allCustomers = [];

    public function __construct()
    {

        global $bdd;

        $allCustomers = $bdd->query('SELECT * FROM customers');




//        while ($donnees = $query_customers->fetch()) {
//
//            array_push($this->allCustomers, $donnees) . '<br />';

        foreach($allCustomers as $client){
            $a=new Client($client['first_name'],$client['last_name'],$client['tel'],$client['address'],$client['postal_code'],$client['city']);
            array_push($this->allCustomers,$a);
        }
        $allCustomers->fetchAll(Pdo::FETCH_ASSOC);
    }
    public function displayAllCustomers(){
        foreach($this->allCustomers as $customer){
            $customer->displayCustomer() .'<br>';
        }
        echo '<br>';
    }

//    public function displayAllCustomers () {
//        foreach ($this->allCustomers as $customers) {
//            echo $customers['first_name'];
//            echo ' '. $customers['last_name']. '<br>';
//            echo $customers['tel']. '<br>' ;
//            echo $customers['address']. '<br>' ;
//            echo $customers['postal_code']. '<br>' ;
//            echo $customers['city']. '<br>' . '<br>' ;
//        }
//    }



}

