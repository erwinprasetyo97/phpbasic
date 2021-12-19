<?php

$name = "Subrata";
$umur = 30;

echo "Nama : ";
echo $name;
echo "\n";
echo "umur : ";
echo $umur;


$name = "Subrata";
$$name = "keren";

echo "Name :";
echo $name;
echo "\n";

echo "Name :";
echo $Subrata;
echo "\n";

define("PENULIS", "Erwin Prasetyo");
define("VERSI_APP", 100);

echo PENULIS;
echo "\n";
echo VERSI_APP;

$tanya = TRUE;
$tanya = NULL;
$tanya = null;
echo "\n";

var_dump(is_null($tanya));

$contoh = "Carick";
unset($contoh);

var_dump(isset($contoh));
