<?php

//mencari hasil dari factorial
function perkalian(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(perkalian(6));

//mencari hasil dari factorial -2 (rekursif)
function faktorial(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorial($value - 1);
    }
}
var_dump(faktorial(5));
