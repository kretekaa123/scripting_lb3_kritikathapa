<?php

class User {
    protected $name, $surname, $username;
    protected $is_admin = false;

    function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    function isAdmin() {
        return $this->is_admin;
    }

    function fullName() {
        echo "$this->name $this->surname";
        if ($this->is_admin) echo " (admin)";
        echo "<br>";
    }
}

class Customer extends User {
    private $city, $state, $country;

    function setLocation($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    function getLocation() {
        return "$this->city, $this->state, $this->country";
    }
}

class AdminUser extends User {
    function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

$user = new User("Soobin", "Choi", "soobin");
$customer = new Customer("Taehyun", "Kim", "taehyun");
$customer->setLocation("seoul", "South", "Korea");
$admin = new AdminUser("Yeonjun", "Choi", "yeonjun");

$user->fullName();
echo "Admin: " . ($user->isAdmin() ? "true" : "false") . "<br>";

$customer->fullName();
echo "Admin: " . ($customer->isAdmin() ? "true" : "false") . "<br>";
echo "Location: " . $customer->getLocation() . "<br>";

$admin->fullName();
echo "Admin: " . ($admin->isAdmin() ? "true" : "false");

?>