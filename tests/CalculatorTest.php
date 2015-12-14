<?php 

class CalculatorTest extends PHPUnit_Framework_TestCase {
	
	public function setUp()
	{
		$this->calc = new Calculator;
	}

	public function testResultDefaultsToZero()
	{
		$this->assertSame(null, $this->calc->getResult());
	}
	
	public function testAddsNumbers()
	{
		$mock = Mockery::mock('Addition');

		$mock->shouldReceive('run')
			 ->once()
			 ->with(5, 0)
			 ->andReturn(5);

		$this->calc->setOperands(5);
		$this->calc->setOperation($mock);

		$result = $this->calc->calculate();

		$this->assertEquals(5, $result);
	}

	public function testSubtractsNumbers()
	{
		$mock = Mockery::mock('Subtraction');

		$mock->shouldReceive('run')
			 ->once()
			 ->with(5, 0)
			 ->andReturn(-5);

		$this->calc->setOperands(5);
		$this->calc->setOperation($mock);

		$result = $this->calc->calculate();

		$this->assertEquals(-5, $result);
	}

	public function testMultipliesNumbers()
	{
		$this->calc->setOperands(3, 5, 10);
		$this->calc->setOperation(new Multiplication);
		$result = $this->calc->calculate();

		$this->assertEquals(150, $result);
	}

	public function testDividesNumbers()
	{
		$this->calc->setOperands(15, 3);
		$this->calc->setOperation(new Division);
		$result = $this->calc->calculate();

		$this->assertEquals(5, $result);
	}

}