<?php

namespace classes;
use classes\interfaces\IGadget;

class NotebookProduct extends Product implements IGadget
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

// abstract method
	public function addProduct($name, $price, $cpu = ''){
		$out = "<br>Новый комп {$name}<br>";
		$out .= "Цена {$price}<br>";
		$out .= "Камень {$cpu}<br>";
		return $out;
	}

// interface
	function getGadget(){}
}