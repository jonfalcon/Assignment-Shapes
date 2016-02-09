<?php

require_once dirname(__DIR__) . '/src/Circle.php';

use Shapes\Circle;

class CircleTest extends \PHPUnit_Framework_TestCase
{

	public function testItCanCalculateArea()
	{
		$circle = new Circle(0);
		$this->assertEquals(0, $circle->area());

		$circle = new Circle(2);
		$value  = pi() * 2 * 2;
		$this->assertEquals($value, $circle->area());

		$circle = new Circle(3.14);
		$value  = pi() * 3.14 * 3.14;
		$this->assertEquals($value, $circle->area());
	}

	public function testItCanCalculatePerimeter()
	{
		$circle = new Circle(0);
		$this->assertEquals(0, $circle->perimeter());

		$circle = new Circle(2);
		$value  = 2 * pi() * 2;
		$this->assertEquals($value, $circle->perimeter());

		$circle = new Circle(3.14);
		$value  = 2 * pi() * 3.14;
		$this->assertEquals($value, $circle->perimeter());
	}

	public function testVolumeAlwaysReturnsZero()
	{
		$circle = new Circle(0);
		$this->assertEquals(0, $circle->volume());

		$circle = new Circle(2);
		$this->assertEquals(0, $circle->volume());

		$circle = new Circle(3.14);
		$this->assertEquals(0, $circle->volume());
	}

}
