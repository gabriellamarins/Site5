<?php




class Client {

    public $first_name;
    public $last_name;
    public $tell;
    public $address;
    public $postal_code;
    public $city;


    public function __construct($first_name,$last_name, $tell, $address, $postal_code, $city){
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->tell = $tell;
        $this->address=$address;
        $this->postal_code =$postal_code;
        $this->city=$city;

    }

    public function displayCustomer(){
        echo 'Name: ' .$this->first_name . '<br>';
        echo 'Last Name: ' . $this->last_name .'<br>';
        echo 'Tel: ' . $this->tell . '<br>';
        echo 'Address: ' . $this->address . '<br>';
        echo 'Postal Code: ' . $this->postal_code . '<br>' ;
        echo 'City: ' . $this->city . '<br>'. '<br>';
    }
}