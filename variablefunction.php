<?php
//variable function 1
function foo()
{
    echo "Halo brother" . PHP_EOL;
}
function hoo()
{
    echo "Halo sister" . PHP_EOL;
}

$functionfoo = "foo";
$functionfoo();

$functionfoo = "hoo";
$functionfoo();

//variabel function 2
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}
sayHello("Erwin", "sampleFunction");
sayHello("Erwin", "strtoupper");
sayHello("Erwin", "strtolower");
