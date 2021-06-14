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
        echo '<li>' . 'Name: ' .$this->first_name . '</li>';
        echo '<li>' . 'Last Name: ' . $this->last_name .'</li>';
        echo '<li>' . 'Tel: ' . $this->tell . '</li>';
        echo '<li>' . 'Address: ' . $this->address . '</li>';
        echo '<li>' . 'Postal Code: ' . $this->postal_code . '</li>' . '</ul>';
        echo '<li>' . 'City: ' . $this->city . '</li>';
    }
}