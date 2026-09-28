<?php

interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    private $make, $model, $year;

    function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function getMake() { return $this->make; }
    function setMake($make) { $this->make = $make; }

    function start() { echo "Car started.<br>"; }

    function displayInfo() {
        echo "$this->make $this->model $this->year<br>";
    }

    function getDescription() {
        return "Normal Car";
    }

    function startEngine() { echo "Engine started.<br>"; }
    function stopEngine() { echo "Engine stopped.<br>"; }
}

class ElectricCar extends Car {
    function charge() { echo "Car charging.<br>"; }

    function getDescription() {
        return "Electric Car";
    }
}

$car = new Car("Toyota", "Corolla", 2022);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "<br>";

$e = new ElectricCar("Tesla", "Model 3", 2024);
$e->charge();
echo $e->getDescription();

?>