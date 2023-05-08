<?php
require_once __DIR__ . '/../Traits/Weight.php';
require_once __DIR__ . '/../Traits/Dimension.php';
class Food extends Article
{
    public $calories;
    use Weight;

    public function __construct($name, $price, $category, $brand, $img, $calories, $weight)
    {
        parent::__construct($name, $price, $category, $brand, $img);
        $this->calories = $calories;
        $this->weight = $weight;
    }
}