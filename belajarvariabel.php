<?php
$nama = "Dzakwan";
$sekolah = "SMA semesta";

echo "Nama : ";
echo $nama;
echo "\n";
echo "Sekolah : ";
echo $sekolah;

$name = "Erwin";
$$name = "keren";

echo "Name :";
echo $name;
echo "\n";

echo "Name :";
echo $Erwin;
echo "\n";

define("PENULIS", "Erwin Prasetyo");
define("KELAHIRAN", "Semarang");

echo PENULIS;
echo "\n";
echo KELAHIRAN;
echo "\n";

$nama = "Prawobo";
unset($nama);

var_dump(is_null($nama));
