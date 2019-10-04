<?php
namespace mycore\traits;

trait TSingleton
{
	private static $instance;
	private function __constuct()
	{

	}

	public static function getInstance()
	{
		if(self::$instance === null)
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
} 
?>