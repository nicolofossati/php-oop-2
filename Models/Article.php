<?php
class Article
{
    public $name;
    public $price;
    public $category;
    public $brand;
    public $img;

    public function __construct($name, $price, $category, $brand, $img)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->brand = $brand;
        $this->img = $img;
    }
}