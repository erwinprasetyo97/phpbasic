<?php

$buat = true;
if ($buat) {
    function sayHello()
    {
        echo "Hello Sayang" . PHP_EOL;
    }
}
sayHello();
sayHello();
sayHello();
sayHello();

function halo2($name, $lastname = "")
{
    echo "halo nama kamu adalah $name" . PHP_EOL;
}
halo2("Erwin");
halo2("Kendro");

//type declaration
function sum(int $bilangan1, int $bilangan2)
{
    $total = $bilangan1 + $bilangan2;
    echo "Hasil Penjumlahan $bilangan1 + $bilangan2 = $total" . PHP_EOL;
}
sum("100", "200");
sum(234, 3432);
sum(true, false);
// sum([],[]);

//variable argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
sumAll(20, 340, 34, 234);

