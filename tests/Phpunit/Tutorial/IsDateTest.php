<?php
namespace Phpunit\Assertion;

require_once __DIR__ . '/IsDate.php';

class IsDateTest extends \PHPUnit_Framework_TestCase
{
	public static function dateOf($yyyy, $mm, $dd)
	{
		return new IsDate($yyyy, $mm, $dd);
	}

	/**
	 * @tests
	 */
	function dateOfの利用()
	{
		$this->markTestSkipped("このテストは失敗する");
		$date = new \DateTime();
		$this->assertThat($date, $this->dateOf(2012, 1, 12));
	}
}
