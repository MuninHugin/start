<?php

class NotebookProduct extends Product
{
	public $cpu;
	
	public function __construct($name, $price, $cpu)
	{
		parent::__construct($name, $price);
		$this->cpu = $cpu;
	}

	public function getProduct() {
		$out = parent::getProduct();
		return $out .= "<b>Процессор: </b>{$this->cpu}<br>";
	}
}