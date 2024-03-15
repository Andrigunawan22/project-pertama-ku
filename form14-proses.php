<?php
function nilai_terbesar($arr){
    $max = $arr [0];
    foreach ($arr as $nilai){
        if ($nilai >$max) {
            $max = $nilai;
        }
    }
    return $max;
}

//$angka = [10, 5, 20, 15, 30];
$input = $_POST['angka'];
$angka = explode(',', $input);
echo "Nilai terbesar: " . nilai_terbesar($angka);