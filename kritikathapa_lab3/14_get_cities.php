<?php
// 14_get_cities.php
header('Content-Type: application/json');

$data = [
    "Nepal" => ["Kathmandu", "Pokhara", "Biratnagar", "Chitwan"],
    "Japan"  => ["Tokyo", "Osaka", "Nagoya", "Fukuoka"],
    "S.Korea" => ["Seoul", "Busan", "Incheon", "Gwangju"]
];

$country = isset($_GET['country']) ? $_GET['country'] : '';

if (isset($data[$country])) {
    echo json_encode($data[$country]);
} else {
    echo json_encode([]);
}
