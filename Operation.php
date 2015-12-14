<?php 

interface Operation {
	/** 
	 * Perform the arithmetic
	 *
	 * @param integer $num
	 * @param integer $current
	 * @param integer
	 */
	public function run($num, $current);
}