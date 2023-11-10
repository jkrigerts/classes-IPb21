<?php

include("Car.php");
include("Train.php");


$myCar = new Car("Dacia");
// $myCar2 = new Car("Apple Car");
Car::makeNoise();
$myCar->makeNoise();
Train::makeNoise();

echo "<br>";
$myTrain = new Train("Škoda");
echo $myTrain->getMileage();
echo "<br>";