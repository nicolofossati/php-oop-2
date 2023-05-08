<?php

trait Dimension
{
    public $height;
    public $width;
    public $depth;

    public function setDimension(float $height, float $width, float $depth)
    {
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }

    public function getDimension()
    {
        return "Height: " . $this->height . 'cm,<br/>Width: ' . $this->width . 'cm,<br/> Depth: ' . $this->depth . "cm";
    }
}