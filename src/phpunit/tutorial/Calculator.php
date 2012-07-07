<?php

class Calculator
{
	function multiply($x, $y)
	{
		return $x * $y;
	}

	function divide($x, $y)
	{
		if ($y === 0) throw new InvalidArgumentException;
		return $x / $y;
	}
}
