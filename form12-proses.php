<?php
function jumlahkan($arr){
    $total = 0;
    foreach ($arr as $nilai){
        $total += $nilai;
    }
    return $total;
}

$input = $_POST['angka'];
$angka = explode(',', $input);
echo "total: " . jumlahkan($angka);