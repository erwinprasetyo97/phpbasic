<?php
$names = ["erwin", "Prasetyo", "sukakoding"];
foreach ($names as $key => $value) {
    echo "Data ke $key = $value" . PHP_EOL;
}

$persons = [
    "first_name" => "Erwin",
    "last_name"  => "Prasetyo",
    "midle_name" => "Suryo"
];
foreach ($persons as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
