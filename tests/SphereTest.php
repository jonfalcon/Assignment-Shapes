<?php

require_once dirname(__DIR__) . '/src/Sphere.php';

use Shapes\Sphere;

class SphereTest extends \PHPUnit_Framework_TestCase
{

	public function testItCanCalculateArea()
	{
		$circle = new Sphere(0);
		$this->assertEquals(0, $circle->area());

		$circle = new Sphere(2);
		$value  = 4 * pi() * pow(2, 2);
		$this->assertEquals($value, $circle->area());

		$circle = new Sphere(3.14);
		$value  = 4 * pi() * pow(3.14, 2);
		$this->assertEquals($value, $circle->area());
	}

	public function testPeremiterAlwaysReturnsZero()
	{
		$circle = new Sphere(0);
		$this->assertEquals(0, $circle->perimeter());

		$circle = new Sphere(2);
		$this->assertEquals(0, $circle->perimeter());

		$circle = new Sphere(3.14);
		$this->assertEquals(0, $circle->perimeter());
	}

	public function testItCanCalculateVolume()
	{
		$circle = new Sphere(0);
		$this->assertEquals(0, $circle->volume());

		$circle = new Sphere(2);
		$value = ( 4 /  3 ) * pi() * pow(2, 3);
		$this->assertEquals($value, $circle->volume());

		$circle = new Sphere(3.14);
		$value = ( 4 /  3 ) * pi() * pow(3.14, 3);
		$this->assertEquals($value, $circle->volume());
	}

}
