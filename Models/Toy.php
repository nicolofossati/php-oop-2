<?php
class Toy extends Article
{
    use Dimension;
    public function __construct($name, $price, $category, $brand, $img, $width, $height, $depth)
    {
        parent::__construct($name, $price, $category, $brand, $img);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
}