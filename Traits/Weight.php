<?php

trait Weight
{

    public $weight;

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}