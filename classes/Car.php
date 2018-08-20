<?php

class Car
{
	public $color;
	public $brand;
	public $doors;
	public static $count = 0;

	const CAR_PROTOTYPE = "Прототип";
	const CAR_PROTOTYPE_SPEED = 150;

	public function __construct($color, $brand, $doors = 5, $year) {
		$this->color = $color;
		$this->brand = $brand;
		$this->doors = $doors;
		$this->year = $year;
	}

	public function getCarInfo()
	{
		return "Марка: {$this->brand}<br>
		Цвет: {$this->color}<br>
		Кол-во дверей: {$this->doors}<br>
		Год выпуска: {$this->year}<br>
		===========================<br>";
	}

	public static function getCountCar(){
		echo self::$count++ . "<br>";
	}
	public static function getPrototypeCar(){
		echo "<h3>Данные тестового авто:</h3>
		<b>Имя:</b> ". self::CAR_PROTOTYPE ."<br>
		<b>Скорость:</b> ". self::CAR_PROTOTYPE_SPEED ."<br>";
	}
}