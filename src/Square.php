<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Square implements ShapeInterface {

	protected $side;

	/**
	 * Square constructor.
	 *
	 * @param float $side
	 */
	public function __construct($side)
	{
		$this->side = floatval($side);
	}

	/**
	 * Get the area
	 *
	 * @return float
	 */
	public function area()
	{
		return pow($this->side, 2);
	}

	/**
	 * Get the perimeter
	 *
	 * @return float
	 */
	public function perimeter()
	{
		return 4 * $this->side;
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
