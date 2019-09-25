<?php

class Product
{
	public $name;
	public $price;
	public static $publishing = "Издательский дом ЭКСМО";

	private $discount = 0;
	protected $bookDiscount;

	public function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}

	public static function echoPublishing(){
		echo self::$publishing;
	}

	public function getProduct() {
		$out = "<h3>О товаре:</h3>
			<b>Наименование: </b>{$this->name}<br>
			<b>Цена: </b>{$this->price}<br>";
		return $out;
	}

	public function setDiscount($data) {
		return $this->discount = $data;
	}

	public function getDiscount() {
		echo $this->discount."<br>";
	}
}