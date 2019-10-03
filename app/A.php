<?php
namespace app;
class A
{
	
	public const TEST = "Class A";
	public function getTest()
	{
		var_dump(self::TEST);
		echo "<br>";
	}

	public function getTest2()
	{
		var_dump(static::TEST);
		echo "<br>";
	}
}
?>