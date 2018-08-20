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

echo "Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>
Кол-во дверей: {$car1->doors}<br>
Год выпуска: {$car1->year}<br>
===========================<br>";
echo "Марка: {$car2->brand}<br>
Цвет: {$car2->color}<br>
Кол-во дверей: {$car2->doors}<br>
Год выпуска: {$car2->year}<br>
===========================";