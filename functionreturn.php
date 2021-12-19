<?php
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$hasil = sum(12, 19);
var_dump($hasil);

function getValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
    echo "UPS".PHP_EOL;
}

$result = getValue(90);
var_dump($result);
