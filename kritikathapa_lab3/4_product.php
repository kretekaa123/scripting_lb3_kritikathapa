<?php

class Product {
    private $description, $quantity, $price;

    function __construct($description, $quantity, $price) {
        if (!is_string($description))
            echo "Description must be string<br>";
        if (!is_numeric($quantity) || !is_numeric($price))
            echo "Quantity and price must be numbers<br>";

        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    function getDescription() { return $this->description; }
    function getQuantity() { return $this->quantity; }
    function getPrice() { return $this->price; }

    function setDescription($v) { $this->description = $v; }
    function setQuantity($v) { $this->quantity = $v; }
    function setPrice($v) { $this->price = $v; }

    function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

$p = new Product("Laptop", 2, 50000);

echo"Description:". $p->getDescription() . "<br>";
echo "Quantity:".$p->getQuantity() . "<br>";
echo "Price:".$p->getPrice() . "<br>";
echo "Total:".$p->calculatePrice();
?>