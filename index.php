<?php
require __DIR__ . '/Models/Products.php';
require __DIR__ . '/Models/Food.php';

$food = new Food('fish', 2300);
$prodotto = new Products('palla', 'cane', $food);
var_dump($prodotto);