<?php 
// Menghitung luas lingkaran
function menghitungLuasLingkaran($radius) {
    $luas = M_PI * $radius * $radius;
    return $luas;
}

// contoh penggunaan
$radius = 5;
$luas = hitungLuasLingkaran($radius);
echo "luas lingkaran dengan radius $radius adalah: $luas";
?>