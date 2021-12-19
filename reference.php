<?php

//tandanya reference adalah menggunakan &
$name = "Erwin";
$othername = &$name;
$othername = "Budi";
echo $name . PHP_EOL;

function increment(int &$value)
{
    $value++ ;
}

$counter = 1;
increment($counter);
echo $counter. PHP_EOL;
