<?php

include_once('config/global.php');
include_once('src/Calculator.php');
include_once('src/Square.php');
include_once('src/Circle.php');

// The calculator
$calculator = new Shapes\Calculator;

// Define our shapes
$square = new Shapes\Square(25);
$circle = new Shapes\Circle(90);
$cube   = float;
$sphere = float;

$shapes = [ $square, $circle, $cube, $sphere ];
$area   = $calculator->surfaceArea($shapes);
$volume = $calculator->totalVolume($shapes);

// Output the total surface area of the shapes
echo "The total surface area is $area\n";

// Output the total volume of the shapes
echo "The total volume is $volume\n";
