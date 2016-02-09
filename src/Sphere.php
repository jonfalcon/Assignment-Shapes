<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Sphere implements ShapeInterface {

	protected $radius;

	/**
	 * Sphere constructor.
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
		return 4 * pi() * pow($this->radius, 2);
	}

	/**
	 * Get the perimeter
	 * NOTE: For a circle/sphere this is also known as circumference
	 *
	 * @return float
	 */
	public function perimeter()
	{
		return 0;
	}

	/**
	 * Calculate the volume.
	 *
	 * @return float
	 */
	public function volume()
	{
		if($this->radius == 0) return 0;

		$radius = $this->radius;

		return ( 4 /  3 ) * pi() * pow($radius, 3);
	}

}
