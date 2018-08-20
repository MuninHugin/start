<?php
require_once 'classes/Car.php';

$car1 = new Car("Зелёный", "Лада калина", 5, 2017);
$car2 = new Car("Серебристый", "Нива", 3, 2014);

echo $car1->getCarInfo();
echo $car2->getCarInfo();