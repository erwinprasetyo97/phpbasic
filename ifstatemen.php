<?php

$nilai1 = 30;
$nilai2 = 40;

if ($nilai1 >= 80 && $nilai2 >= 80) {
    echo "Kalian Mendapat Nilai A";
} else if ($nilai1 >= 70 && $nilai2 >= 70) {
    echo "Kalian Mendapat Nilai B";
} else if ($nilai1 >= 60 && $nilai2 >= 60) {
    echo "Kalian Mendapat Nilai C";
} else if ($nilai1 >= 50 && $nilai2 >= 50) {
    echo "Kalian Mendapat Nilai D";
} else {
    echo "Kalian Mendapat Nilai E";
}

if ($nilai1 >= 80 && $nilai2 >= 80) :
    echo "Kalian Mendapat Nilai A";
elseif ($nilai1 >= 70 && $nilai2 >= 70) :
    echo "Kalian Mendapat Nilai B";
elseif ($nilai1 >= 60 && $nilai2 >= 60) :
    echo "Kalian Mendapat Nilai C";
elseif ($nilai1 >= 50 && $nilai2 >= 50) :
    echo "Kalian Mendapat Nilai D";
else :
    echo "Kalian Mendapat Nilai E";
endif;
