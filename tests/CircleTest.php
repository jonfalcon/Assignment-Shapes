<?php

require dirname(__DIR__) . '/src/Circle.php';

use Shapes\Circle;

class CircleTest extends \PHPUnit_Framework_TestCase
{

	public function testCanCalculateArea()
	{
		$square = new Circle(0);
		$this->assertEquals(0, $square->area());

		$square = new Circle(2);
		$value  = pi() * 2 * 2;
		$this->assertEquals($value, $square->area());

		$square = new Circle(3.14);
		$value  = pi() * 3.14 * 3.14;
		$this->assertEquals($value, $square->area());
	}

	public function testCanCalculatePerimeter()
	{
		$square = new Circle(0);
		$this->assertEquals(0, $square->perimeter());

		$square = new Circle(2);
		$value  = 2 * pi() * 2;
		$this->assertEquals($value, $square->perimeter());

		$square = new Circle(3.14);
		$value  = 2 * pi() * 3.14;
		$this->assertEquals($value, $square->perimeter());
	}

	public function testCanCalculateVolume()
	{
		$square = new Circle(0);
		$this->assertEquals(0, $square->volume());

		$square = new Circle(2);
		$value  = 4 / ( 3 * pi() * 2 * 2 *2 );
		$this->assertEquals($value, $square->volume());

		$square = new Circle(3.14);
		$value = 4 / ( 3 * pi() * 3.14 * 3.14 *3.14 );
		$this->assertEquals($value, $square->volume());
	}

}
