<?php
class Toy extends Article
{
    public function __construct($name, $price, $category, $brand, $img)
    {
        parent::__construct($name, $price, $category, $brand, $img);
    }
}