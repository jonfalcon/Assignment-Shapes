<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Cube implements ShapeInterface {

	/**
	 * Length of one side
	 * @var float
	 */
	protected $side;

	/**
	 * Default constructor.
	 *
	 * @param float $side
	 */
	public function __construct($side)
	{
		$this->side = $side;
	}

	/**
	 * Get the area
	 *
	 * @return float
	 */
	public function area()
	{
		return 6 * ($this->side * $this->side);
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
		$length = $this->side;

		return $length * $length * $length;
	}

}
