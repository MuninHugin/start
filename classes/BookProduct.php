<?php

class BookProduct extends Product
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
}