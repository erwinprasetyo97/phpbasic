<?php

$hasil = array(1, 2, 3, 4);
var_dump($hasil);

$names = ["Erwin", "Spongbob", "Patrick"];
var_dump($names);

var_dump($names[0]);
$names[0] = "Sandiko";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Harmoko";
var_dump($names);

var_dump(count($names));

$erwin = array(
    "id" => 30,
    "nama" => "Erwin Prasetyo",
    "age" => 24,
    "address" => array(
        "kota" => "Juwana",
        "kabupaten" => "Pati"
    )
);

$joko = [
    "id" => 67,
    "nama" => "Joko susilo",
    "alamat" => "Lamper Tengah"

];

var_dump($erwin);
var_dump($erwin["address"]["kota"]);
