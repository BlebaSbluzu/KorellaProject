<?php
class Product {
    public $id;
    public $name;
    public $size;
    public $price;
    public $Season;



    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function intro() {
        echo "The product is {$this->name} and the price is {$this->price}.";
    }
}

// Strawberry is inherited from Fruit
class Bushes extends Product {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Bushes("Strawberry", "red");
$strawberry->message();
$strawberry->intro();