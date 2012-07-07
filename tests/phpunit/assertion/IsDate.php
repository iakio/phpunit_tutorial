<?php
namespace Phpunit\Assertion;

class IsDate extends \PHPUnit_Framework_Constraint
{
	private $yyyy;
	private $mm;
	private $dd;

	public function __construct($yyyy, $mm, $dd)
	{
		$this->yyyy = $yyyy;
		$this->mm = $mm;
		$this->dd = $dd;
	}

	public function matches($other)
	{
		if (!($other instanceof \DateTime)) {
			return FALSE;
		}
		if ($this->yyyy != $other->format('Y')) {
			return FALSE;
		}
		if ($this->mm != $other->format('m')) {
			return FALSE;
		}
		if ($this->dd != $other->format('d')) {
			return FALSE;
		}
		return TRUE;
	}

	public function toString()
	{
		return sprintf(" is equal to %s/%s/%s", $this->yyyy, $this->mm, $this->dd);
	}

	protected function failureDescription($other)
	{
		if ($other instanceof \DateTime) {
			return $other->format("Y/m/d") . $this->toString();
		} else {
			return \PHPUnit_Util_Type::export($other) . $this->toString();
		}
	}
}
