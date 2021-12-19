<?php

echo "Decimal :";
var_dump(12345);

echo "Octal :";
var_dump(012345);

echo "Hexadecimal :";
var_dump(0x1B);

echo "Binary :";
var_dump(0b11111);

echo "Underscore in number";
var_dump(12_345_341_223);

echo "Floating Point :";
var_dump(1.234);

echo "Floating Point with e notation plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point with e notation minus (1.2 x 0,001) : ";
var_dump(1.2e-3);

echo "underscore di floating point :";
var_dump(12_345.567);

echo "integer overflow :";
var_dump(9223372036854775807);

echo "benar: ";
var_dump(True);

echo "Salah :";
var_dump(False);

echo 'Nama : ';
echo 'Erwin Prasetyo';
echo "\n";

echo "Nama : ";
echo "Erwin\t Prasetyo\n";

echo <<<ERWIN
Selamat Belajar PHP sekarang
kali ini kita belajar 
Siswa SMA Semesta Putra
menggunakan heredoc
selamat mencoba

ERWIN;

echo <<<'ESKULKODING'
Selamat Belajar PHP sekarang
kali ini kita belajar 
Siswa SMA Semesta Putra
menggunakan heredoc
selamat mencoba

ESKULKODING;
