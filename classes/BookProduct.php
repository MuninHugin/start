<?php

namespace classes;
use classes\interfaces\I3D;
use classes\interfaces\IComics;

class BookProduct extends Product implements I3D, IComics
{
	public $numPages;
	
	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
	}

	public function getProduct() {
		$out = parent::getProduct();
		return $out .= "<b>Количество страниц: </b>{$this->numPages}<br>";
	}

	public function setBookDiscount($data) {
		return $this->bookDiscount = $data;
	}
	public function getBookDiscount() {
		echo $this->bookDiscount."<br>";
	}

// abstract method
	public function addProduct($name, $price, $namePages = 0){
		$out = "<br>Новая книга {$name}<br>";
		$out .= "Цена {$price}<br>";
		$out .= "Кол-во страниц {$namePages}<br>";
		return $out;
	}

// interface
	public function getI3D(){
		return self::TEST_I3D;
	}
	public function getIComics(){
		return self::TEST_ICOMICS;
	}
}