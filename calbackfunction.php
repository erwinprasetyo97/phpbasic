<?php
//calback function
function sayHello(String $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Erwin", "strtoupper");
sayHello("Erwin", "strtolower");
sayHello("Erwin", function (string $name): string {
    return strtoupper($name);
});
sayHello("Erwin", fn ($name) => strtoupper($name));
