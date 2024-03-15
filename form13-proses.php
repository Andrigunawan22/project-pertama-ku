<?php
function kalikan($arr){
    $total = 1;
    foreach ($arr as $nilai){
        $total += $nilai;
    }
    return $total;
}

// $angka = [1, 2, 3, 4, 5];
$input = $_POST['angka'];
$angka = explode(',', $input);
echo "Hasil kali: " . kalikan($angka);