<?php
//menghitung jumlah digit dalam suatu angka

$angka = 1234;
$angka_digit = 0;

while ($angka != 0) {
    $angka = floor($angka / 10);
    $jumlah_digit++;
}

echo "jumlah_digit: $jumlah_digit";