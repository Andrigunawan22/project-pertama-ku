<?php
// Data produk dan harga
$produk = [
    'Kaos' => 100000,
    'Celana' => 200000,
    'Topi' => 500000
];

// keranjang belanja (produk dan jumlah)
$keranjang = [
    'Kaos' => $_POST['kaos'],
    'Celana' => $_POST['celana'],
    'Topi' => $_POST['topi']
];

// Hitung total belanja
$total = 0;
foreach ($keranjang as $item => $qty) {
    if (isset($produk[$item])) {
        $total += $produk [$item] * $qty;
    }
}

// Tampilkan total belanja
echo "Total belanja: Rp. " . number_format($total, 0, ',', '.');<?php
// Data produk dan harga
$produk = [
    'Kaos' => 100000,
    'Celana' => 200000,
    'Topi' => 500000
];

// keranjang belanja (produk dan jumlah)
$keranjang = [
    'Kaos' => $_POST['kaos'],
    'Celana' => $_POST['celana'],
    'Topi' => $_POST['topi']
];

// Hitung total belanja
$total = 0;
foreach ($keranjang as $item => $qty) {
    if (isset($produk[$item])) {
        $total += $produk [$item] * $qty;
    }
}

// Tampilkan total belanja
echo "Total belanja: Rp. " . number_format($total, 0, ',', '.');