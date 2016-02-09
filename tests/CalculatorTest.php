<?php

require_once dirname(__DIR__) . '/src/Square.php';
require_once dirname(__DIR__) . '/src/Circle.php';
require_once dirname(__DIR__) . '/src/Calculator.php';

use Shapes\Square;
use Shapes\Circle;
use Shapes\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

	public function testCanCalculateSurfaceAreaOfTwoSquares()
	{
		$square1    = new Square(2);
		$square2    = new Square(4);
		$calculator = new Calculator();

		// expected value
		$value      = $square1->area() + $square2->area();
		$this->assertEquals($value, $calculator->surfaceArea(compact('square1', 'square2')));
	}

	public function testCanCalculateSurfaceAreaOfTwoCircles()
	{
		$circle1    = new Circle(2);
		$circle2    = new Circle(4);
		$calculator = new Calculator();

		// expected value
		$value      = $circle1->area() + $circle2->area();
		$this->assertEquals($value, $calculator->surfaceArea(compact('circle1', 'circle2')));
	}

	public function testCanCalculateSurfaceAreaOfTwoDifferentShapes()
	{
		$square     = new Square(2);
		$circle     = new Circle(4);
		$calculator = new Calculator();

		// expected value
		$value      = $square->area() + $circle->area();
		$this->assertEquals($value, $calculator->surfaceArea(compact('square', 'circle')));
	}

	public function testCanCalculateSurfaceVolumeOfTwoSquares()
	{
		$square1    = new Square(2);
		$square2    = new Square(4);
		$calculator = new Calculator();

		// expected value
		$value      = $square1->volume() + $square2->volume();
		$this->assertEquals($value, $calculator->totalVolume(compact('square1', 'square2')));
	}

	public function testCanCalculateSurfaceVolumeOfTwoCircles()
	{
		$circle1    = new Circle(2);
		$circle2    = new Circle(4);
		$calculator = new Calculator();

		// expected value
		$value      = $circle1->volume() + $circle2->volume();
		$this->assertEquals($value, $calculator->totalVolume(compact('circle1', 'circle2')));
	}

	public function testCanCalculateSurfaceVolumeOfTwoDifferentShapes()
	{
		$square     = new Square(2);
		$circle     = new Circle(4);
		$calculator = new Calculator();

		// expected value
		$value      = $square->volume() + $circle->volume();
		$this->assertEquals($value, $calculator->totalVolume(compact('square', 'circle')));
	}

}
