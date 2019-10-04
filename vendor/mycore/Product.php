<?php

namespace mycore;

abstract class Product
{
	private $name;
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

	// Магические методы
	public function __toString()
	{
		return "Магический метод __toString<br>";
	}
	public function __get($data)
	{
		$data = ucfirst($data);
		$method = "get{$data}";
		if(method_exists($this, $method))
		return $this->$method();
	}


	// getters
	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}

	// setters
	public function setName($data){
		return $this->name = $data;
	}
	public function setPrice($data){
		return $this->price = $data;
	}

	abstract protected function addProduct($name, $price);
}