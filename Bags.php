<?php
require_once "Article.php";


class Bags extends Article {
    public function __construct(string $name, $description, $price, $size, $color)
    {
        parent::__construct($name, $description, $price, $size, $color);
    }



//    public function getColor()
//    {
//        return ' Size of the bag ' . $this->color;
//    }

}