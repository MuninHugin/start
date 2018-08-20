<?php

class Car
{
	public $color;
	public $brand;
	public $doors = 5;

	public function getCarInfo()
	{
		return "Марка: {$this->brand}<br>
		Цвет: {$this->color}<br>
		Кол-во дверей: {$this->doors}<br>
		Год выпуска: {$this->year}<br>
		===========================<br>";
	}
}