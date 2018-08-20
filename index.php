<?php
require_once 'classes/Car.php';

echo Car::$count."<br>";
Car::getCountCar();
$car1 = new Car("Зелёный", "Лада калина", 5, 2017);
Car::getCountCar();
$car2 = new Car("Серебристый", "Нива", 3, 2014);
Car::getCountCar();

echo $car1->getCarInfo();
echo $car2->getCarInfo();
Car::getPrototypeCar();
echo Car::CAR_PROTOTYPE."<br>";