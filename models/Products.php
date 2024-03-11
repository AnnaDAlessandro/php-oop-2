<?php

class Products{
    public $name;
    public $price;
    public $image;
    public $is_available;
    public $quantità;



    public $category;

    public function __construct($_name, $_price, $_image,$_is_available,$_quantità, Category $_category)
    {
        $this -> name = $_name;
        $this -> price =  $_price;
        $this -> image = $_image;
        $this -> category = $_category;
        $this -> is_available = $_is_available;
        $this -> quantità = $_quantità;



    }
    public function getProductsDetails(){
        return "Products: $this->name, Price $this->price, Quantity $this->quantità";

    }

    public function getIcon(){
        $icon= $this->category->icon;
        return "<i class='$icon'> </i>";
    }

}


?>

