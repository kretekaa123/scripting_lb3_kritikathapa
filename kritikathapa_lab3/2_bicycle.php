<?php

class Bicycle {
    public $brand, $model, $year;
    public $description = "Used bicycle";
    public $weight;

    function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    function getWeight($kg = false) {
        return $kg ? $this->weight / 1000 . " kg" : $this->weight . " grams";
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }
}

$b1 = new Bicycle();
$b1->brand = "Giant";
$b1->model = "Escape 3";
$b1->year = 2022;
$b1->description = "New bicycle";
$b1->setWeight(12000);

$b2 = new Bicycle();
$b2->brand = "Trek";
$b2->model = "Marlin 5";
$b2->year = 2023;
$b2->description = "Used bicycle";
$b2->setWeight(14000);

echo $b1->getInfo() . "<br>";
echo $b1->getWeight(true) . "<br>";
echo $b1->getWeight() . "<br><br>";

echo $b2->getInfo() . "<br>";
echo $b2->getWeight(true) . "<br>";
echo $b2->getWeight();

?>