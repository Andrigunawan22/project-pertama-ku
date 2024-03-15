<?php
//menemukan faktorial dari suatu angka

$angka = 5;
$faktorial; = 1;

for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;
}

echo "Faktorial dari $angka aadalah $faktorial";