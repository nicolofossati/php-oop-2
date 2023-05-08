<?php
require_once __DIR__ . '/../Traits/Weight.php';
require_once __DIR__ . '/../Traits/Dimension.php';
class Product extends Article
{
    use Weight;
    use Dimension;


    public function __construct($name, $price, $category, $brand, $img, $weight, $width, $height, $depth)
    {
        parent::__construct($name, $price, $category, $brand, $img);
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
}