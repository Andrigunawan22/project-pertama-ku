<?php

$angka = $_POST['angka'];

$faktorial = 1;
for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;
}

echo "<p>Faktorial dari $angka adalah $faktorial</p>";