<?php

include_once("Vehicle.php");

class Train extends Vehicle {

  static function makeNoise() {
    echo "Choo, Choo!!!!";
  }
  public function getMileage() {
    return $this->mileage;
  }
}