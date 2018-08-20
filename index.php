<?php
require_once 'classes/Car.php';

$car1 = new Car();
$car2 = new Car();
$car1->color = "Зелёный";
$car1->brand = "Лада калина";
$car1->year = 2017;

$car2->color = "Серебристый";
$car2->brand = "Нива";
$car2->doors = 3;
$car2->year = 2014;

echo $car1->getCarInfo();
echo $car2->getCarInfo();