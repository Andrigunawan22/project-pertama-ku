<?php
function urutkan($arr){
    sort($arr);
    return $arr;
}

//$angka = [5, 3, 8, 1, 2];
$input = $_POST['angka'];
$angka = explode(',', $input);
$angka_urut = urutkan ($angka);
echo "Arrray setelah diurutkan: " . implode(", ", $angka_urut) ;