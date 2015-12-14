<?php 

class SubtractionTest extends PHPUnit_Framework_TestCase {
	public function testFindsTheDifferenceOfNumbers()
	{
		$subtraction = new Subtraction;
		$difference = $subtraction->run(5, 0);

		$this->assertEquals(-5, $difference);
	}
}