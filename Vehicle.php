<?php

abstract class Vehicle {
  public $brand;
  protected $mileage = 0;

  public function __construct($brand) {
    $this->brand = $brand;
    echo $this->brand . " is alive \n";
  }

  abstract static function makeNoise();
  
}