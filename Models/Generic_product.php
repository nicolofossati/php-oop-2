<?php
class Product extends Article
{
    public $calories;

    public function __construct($name, $price, $category, $brand, $img)
    {
        parent::__construct($name, $price, $category, $brand, $img);
    }
}