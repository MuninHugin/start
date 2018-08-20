<?php

class Car
{
	public $color;
	public $brand;
	public $doors;

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
}