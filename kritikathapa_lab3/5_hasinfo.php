<?php

interface HasInfo {
    public function getInfo();
}

class Address implements HasInfo {
    public $street, $number, $city;

    function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    function getInfo() {
        return "Address: street $this->street, number $this->number, city $this->city";
    }
}

class Phone implements HasInfo {
    public $prefix, $number;

    function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    function getInfo() {
        return "Number: $this->prefix / $this->number";
    }
}

class User implements HasInfo {
    public $name, $surname;
    private $address, $phone;

    function __construct($name, $surname, $address, $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    function getInfo() {
        return "User: $this->name $this->surname "
             . $this->address->getInfo() . " "
             . $this->phone->getInfo();
    }
}

$a = new Address("Seoul", 10, "South Korea");
$p = new Phone("+977", "9812345678");
$u = new User("Choi", "San", $a, $p);

echo $u->getInfo();

?>