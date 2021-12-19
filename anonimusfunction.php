<?php
$say = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$say("erwin");

//anonomus function dengan argument

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodbye("Erwin", function (string $name): string {
    return strtoupper($name);
});
$filterFunction = function (string $name): string {
    return strtolower($name);
};
sayGoodbye("erwin", $filterFunction);

//Mengakses variable luar ya
$namaAwal = "Erwin";
$namaAkhir = "Prasetyo";
$gabungan = function()use($namaAwal, $namaAkhir) {
    echo "gabungan namanya adalah $namaAwal dan $namaAkhir".PHP_EOL;
};

$gabungan();