<?php

class Car {
  public $brand;

  public function __construct($brand) {
    $this->brand = $brand;
    echo $this->brand . " is alive <br>";
  }

  public function __destruct()
  {
    echo $this->brand . " is dead <br>";
  }

  // Uztaisi metodi makeNoise -> beep beep
  static function makeNoise() {
    echo "Beep, beep!! <br>";
  }
}