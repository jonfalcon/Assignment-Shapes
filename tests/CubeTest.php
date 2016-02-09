<?php

require dirname(__DIR__) . '/src/Cube.php';

use Shapes\Cube;

class CubeTest extends \PHPUnit_Framework_TestCase
{

	public function testItCanCalculateArea()
	{
		$square = new Cube(0);
		$this->assertEquals(0, $square->area());

		$square = new Cube(2);
		$this->assertEquals(24, $square->area());

		$square = new Cube(3.14);
		$this->assertEquals(59.1576, $square->area());
	}

	public function testPermiterAlwaysReturnZero()
	{
		$square = new Cube(0);
		$this->assertEquals(0, $square->perimeter());

		$square = new Cube(2);
		$this->assertEquals(0, $square->perimeter());

		$square = new Cube(3.14);
		$this->assertEquals(0, $square->perimeter());
	}

	public function testItCanCalculateVolume()
	{
		$square = new Cube(0);
		$this->assertEquals(0, $square->volume());

		$square = new Cube(2);
		$this->assertEquals(8, $square->volume());

		$square = new Cube(3.14);
		$this->assertEquals(30.959144, $square->volume());
	}

}
