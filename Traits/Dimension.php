<?php

trait Dimension
{
    public $height;
    public $width;
    public $depth;

    public function setDimension($height, $width, $depth)
    {
        if (!is_numeric($height)) {
            throw new Exception('La larghezza non è un numero!');
        } else if (!is_numeric($width)) {
            throw new Exception('L\'altezza non è un numero!');
        } else if (!is_numeric($depth)) {
            throw new Exception('La profondità non è un numero!');
        }

        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }

    public function getDimension()
    {
        return "Height: " . $this->height . 'cm,<br/>Width: ' . $this->width . 'cm,<br/> Depth: ' . $this->depth . "cm";
    }
}