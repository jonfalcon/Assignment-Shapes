<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return float
	 */
	public function surfaceArea(array $shapes)
	{
		if(count($shapes))
		{
			$sum = 0;
			foreach($shapes as $shape)
			{
				$sum += $shape->area();
			}

			return $sum;
		}

		return 0;
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param   array $shapes
	 * @return  float
	 */
	public function totalVolume(array $shapes)
	{
		if(count($shapes))
		{
			$sum = 0;
			foreach($shapes as $shape)
			{
				$sum += $shape->volume();
			}

			return $sum;
		}

		return 0;
	}

}
