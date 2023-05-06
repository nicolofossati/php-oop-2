<?php
class Food extends Article
{
    public $calories;

    public function __construct($name, $price, $category, $brand, $img, $calories)
    {
        parent::__construct($name, $price, $category, $brand, $img);
        $this->calories = $calories;
    }
}