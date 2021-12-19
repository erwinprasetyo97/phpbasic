<?php

$colors = array("biru", "ungu", "kuning", "pink");

$colors[0] = "merah";
$colors[] = "Hijau";
unset($colors[2]);
var_dump($colors);
var_dump(count($colors));
var_dump($colors[1]);

$erwin = [
    "nim" => 123456,
    "nama" => "Erwin Prasetyo",
    "adress" => array(
        "desa" => "kuvikiland",
        "kecamatan" => "baubau"
    )
];

var_dump($erwin);
