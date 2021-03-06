<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Circle implements ShapeInterface {

	protected $radius;

	/**
	 * Circle constructor.
	 *
	 * @param float $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the area
	 *
	 * @return float
	 */
	public function area()
	{
		return pi() * pow($this->radius, 2);
	}

	/**
	 * Get the perimeter
	 * NOTE: For a circle/sphere this is also known as circumference
	 *
	 * @return float
	 */
	public function perimeter()
	{
		return 2 * pi() * $this->radius;
	}

	/**
	 * Calculate the volume.
	 *
	 * @return float
	 */
	public function volume()
	{
		return 0;
	}

}
