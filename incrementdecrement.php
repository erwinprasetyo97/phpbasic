<?php

// $a = 20;
// $b = --$a;
// $b = --$a;

// var_dump($b);

$first = [
    "first_name" => "Erwin",
    "last_name" => "Prasetyo"
];

$last = [
    "last_name" => "Praset",
    "first_name" => "Erwin"
];

var_dump($first + $last); //union
var_dump($first == $last); //Equality
var_dump($first === $last); //Identity
var_dump($first != $last); //Non Equality
var_dump($first <> $last); //Non Equality
var_dump($first !== $last); //Non Identity