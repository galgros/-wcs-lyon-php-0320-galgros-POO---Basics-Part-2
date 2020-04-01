<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 2);
$rockrider = new Bicycle('yellow', 2);
$tornado = new Bicycle('black', 2);

$theHomer = new Car('grey', 3, 'electric');
$pinkSedan = new Car('pink', 5, 'gaz');
$springPolice = new Car('black&white', 4, 'gaz');

$van = new Truck('red', 5, 'gaz', 50);
$bigTruck = new Truck('white', 3, 'gaz', 250);
$van1 = new Truck('red', 5, 'gaz', 50);
$van2 = new Truck('red', 5, 'gaz', 50);
$van3 = new Truck('red', 5, 'gaz', 50);
$van4 = new Truck('red', 5, 'gaz', 50);
$van5 = new Truck('red', 5, 'gaz', 50);
$van6 = new Truck('red', 5, 'gaz', 50);





echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br>';
echo '<hr>';

echo $pinkSedan->start();
echo $pinkSedan->forward();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';
echo $pinkSedan->brake();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';
echo '<hr>';

echo 'capacity: ' . $bigTruck->getStorageCapacity();
echo '<br>current load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->start();
echo $bigTruck->forward();
echo '<br> Vitesse du big truck ' . $bigTruck->getCurrentSpeed() . 'km/h<br>';
echo $bigTruck->brake();
echo '<br> Vitesse du big truck ' . $bigTruck->getCurrentSpeed() . 'km/h<br>';
$bigTruck->setLoad(200);
echo 'new load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->filling() . '<br>';
$bigTruck->setLoad(300);
echo 'new load: ' . $bigTruck->getLoad() . '<br>';
echo $bigTruck->filling() . '<br>';
echo '<hr>';