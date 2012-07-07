<?php
namespace Phpunit\Tutorial;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	/** @test */
	function multiplyで3と4の乗算結果が取得できる() {
		$calc = new Calculator();
		$expected = 12;
		$actual = $calc->multiply(3, 4);
		$this->assertThat($actual, $this->equalTo($expected));
	}

	/** @test */
	function multiplyで5と7の乗算結果が取得できる() {
		$calc = new Calculator();
		$expected = 35;
		$actual = $calc->multiply(5, 7);
		$this->assertThat($actual, $this->equalTo($expected));
	}

	/** @test */
	function divideで3と2の除算結果が取得できる() {
		$calc = new Calculator();
		$expected = 1.5;
		$actual = $calc->divide(3, 2);
		$this->assertThat($actual, $this->equalTo($expected));
	}

	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	function divideの第2引数を0に指定した場合にはInvalidArgumentExceptionを送出する() {
		$calc = new Calculator();
		$calc->divide(5, 0);
	}

}
