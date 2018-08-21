<?php

class Product
{
	public $name;
	public $price;
	
	public $cpu;
	public $numPages;

	public function __construct($name, $price, $cpu=null, $numPages=null) {
		$this->name = $name;
		$this->price = $price;
		$this->cpu = $cpu;
		$this->numPages = $numPages;
	}

	public function getCpu() {
		return $this->cpu;
	}

	public function getNumPages() {
		return $this->numPages;
	}

	public function getProduct($type = 'notebook') {
		$out = "<h3>О товаре:</h3>
			<b>Наименование: </b>{$this->name}<br>
			<b>Цена: </b>{$this->price}<br>
		";
		if($type == 'notebook') {
			$out .= "<b>Процессор: </b>{$this->cpu}<br>";
		} else {
			$out .= "<b>Количество страниц: </b>{$this->numPages}<br>";			
		}
		return $out;
	}
}