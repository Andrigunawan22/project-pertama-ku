<?php

$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;

if ($angka > 10) {
    $mes =  "Angka lebih besar dari 10";
} else {
    $mes = "Angka tidak lebih besar dari 10";
}

echo $mes;