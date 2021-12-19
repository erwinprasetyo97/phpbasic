<?php

function getValue()
{
    return 100;
}

$value = getValue();


$name = "Erwin Prasetyo";

echo $name;
echo "\n";

$date = new DateTime();


function jalankanApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

var_dump(jalankanApp("Erwin Prasetyo"));
