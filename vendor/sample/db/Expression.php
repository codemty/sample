<?php
namespace sample\db;


class Expression
{
	/**
	 * 查询表达式
	 * @var [type]
	 */
	protected $value;


	public function __construct($value)
	{
		$this->value   = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function __toString()
	{
		return (string) $this->value;
	}
}