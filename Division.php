<?php 

class Division implements Operation {
	public function run($num, $current)
	{
		// If this is the first calculation,
		// then return the only operand
		if ( is_null($current) ) return $num;

		return $current / $num;
	}
}