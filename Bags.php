<?php
require_once "Article.php";



class Bags extends Article {


public $size;
public $color;

public function __construct(string $name, $description, $price, $size, $color)
{
    $this->size =$size;
   $this->color =$color;
parent::__construct($name, $description, $price);

}


}




public function displayNewAttributes() {

        echo '<li>' . 'Name: ' . $this->name . '</li>';
        echo '<li>' . 'Description: ' . $this->description . '</li>';
        echo '<li>' . 'Price: ' . $this->price . '</li>';
        echo '<li>' . 'Size: ' . $this->size . '</li>' ;
        echo '<li>' . 'Color: ' . $this->color . '</li>' . '</ul>';
        }


?>



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


    }

//    public function getColor()
//    {
//        return ' Size of the bag ' . $this->color;
//    }

