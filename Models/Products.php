<?php
class Products
{
    public $title;
    //public $price;
    public $category;
    public $type;
    //public $img;

    public function __construct($title, /* $price ,*/$category, $type /*,  $img */)
    {
        $this->title = $title;
        $this->category = $category;
        $this->type = $type;
    }
}