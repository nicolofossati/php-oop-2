<?php
class Food
{
    public $name;
    public $calories;

    public function __construct($name, $calories)
    {
        $this->name = $name;
        $this->calories = $calories;
    }
}