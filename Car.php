<?php

include_once("Vehicle.php"); 

class Car extends Vehicle {

  public function __destruct()
  {
    echo $this->brand . " is dead <br>";
  }

  // Uztaisi metodi makeNoise -> beep beep
  static function makeNoise() {
    echo "Beep, beep!! <br>";
  }
}