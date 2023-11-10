<?php

include("Car.php");


$myCar = new Car("Dacia");
// $myCar2 = new Car("Apple Car");
Car::makeNoise();
$myCar->makeNoise();