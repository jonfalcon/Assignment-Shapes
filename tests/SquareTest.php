<?php

require dirname(__DIR__) . '/src/Square.php';

use Shapes\Square;

class SquareTest extends \PHPUnit_Framework_TestCase
{

	public function testCanCalculateArea()
	{
		$square = new Square(0);
		$this->assertEquals(0, $square->area());

		$square = new Square(2);
		$this->assertEquals(4, $square->area());

		$square = new Square(3.14);
		$this->assertEquals(9.8596, $square->area());
	}

	public function testCanCalculatePerimeter()
	{
		$square = new Square(0);
		$this->assertEquals(0, $square->perimeter());

		$square = new Square(2);
		$this->assertEquals(8, $square->perimeter());

		$square = new Square(3.14);
		$this->assertEquals(12.56, $square->perimeter());
	}

	public function testCanCalculateVolume()
	{
		$square = new Square(0);
		$this->assertEquals(0, $square->volume());

		$square = new Square(2);
		$this->assertEquals(8, $square->volume());

		$square = new Square(3.14);
		$this->assertEquals(30.959144, $square->volume());
	}

}
