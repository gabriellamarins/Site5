<?php


class Article {


//we call all the attributes at the beginning of the class

    public $name;
    public $description;
    public $price;
    public $image;
    public $weight;
    public $quantity;
    public $available;


// uma função construtora pra definir as variaveis

    function __construct($name, $description, $price, $weight)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->weight = $weight;
    }






// a função que sera responsavel por imrpimir os dados, mas que precisa ser chamada em outra pagina

    public function displayArticle( ) {

        echo $this->name .'<br>';
        echo $this->description . '<br>';
        echo $this->price . " €" . '<br>';
        echo $this->weight . " g" . '<br>';


    }

}

