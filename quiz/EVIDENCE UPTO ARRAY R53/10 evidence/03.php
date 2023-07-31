<?php
$tamim = [
    "Bangladesh" => "Dhaka",
    "India" => "Delhi",
    "Pakistan" => "Islamabad",
    "Afganistan" => "Kabul",
    "Nepal" => "Kathmandu",
    "America" => "New York",
    "United Kingdom" => "London"
];
ksort($tamim);
foreach ($tamim as $key => $value) {
    echo $key . " = " . $value . "<br>";
}
?>