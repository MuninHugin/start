<?php

namespace app;
use mycore\interfaces\I3D;
use mycore\interfaces\IComics;
use mycore\Product;
use mycore\traits\TPublicationDate;

class BookProduct extends Product implements I3D, IComics
{
	use TPublicationDate;

	public $numPages;
	
	public function __construct($name, $price, $numPages, $TDatePublish)
	{
		parent::__construct($name, $price);
		$this->numPages = $numPages;
		$this->TDatePublish = $TDatePublish;
	}

	public function getProduct() {
		$out = parent::getProduct();
		$out .= "<b>Количество страниц: </b>{$this->numPages}<br>";
		$out .= "<b>Дата публикации :</b>{$this->TDatePublish}<br>";
		$out .= "{$this->getTraitMethod()}<br>";
		return $out;
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

// Цепочка методов
	public function getAction1()
	{
		echo "<p>Действие 1</p>";
		return $this;  // (!) для цепочки методов возвращаем объект
	}
	public function getAction2()
	{
		echo "<p>Действие 2</p>";
		return $this;  // (!) для цепочки методов возвращаем объект
	}
}