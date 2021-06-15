<?php
require_once "Article.php";



class Bags extends Article {


private $size;
private $material;
public $color;



public function __construct(string $name, $description, $price, $size, $color)
{
    parent::__construct($name, $description, $price);
    $this->size =$size;
   $this->color =$color;


}

//-----Getter and Setter-------

    public function getSize(){
        return $this->size;
    }

    public function setMaterial($material){
       return $this->material=$material;
    }
//
//    public function getMaterial(){
//        return $this->material;}



    public function displayNewAttributes() {
        echo 'Special Article:'.'<br>';
        echo  'Name: ' . $this->name .'<br>';
        echo 'Description: ' . $this->description . '<br>';
        echo 'Price: ' . $this->price . '<br>';
        echo 'Size: ' . $this->size . '<br>' ;
        echo 'Color: ' . $this->color . '<br>' . '<br>';
        }

}



//    public function __construct(string $name, $description, $price, $size, $color)
//    {
//        parent::__construct($name, $description, $price);
//        $this->size =$size;
//        $this->color =$color;
//        var_dump($color);
//    }
//
//










//        foreach ($this->new_att as $attributs) {
//            var_dump($this);
//            echo $attributs['size'];
//            echo $attributs['color'];
      //  }


//    }

//    public function getColor()
//    {
//        return ' Size of the bag ' . $this->color;
//    }

