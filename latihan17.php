<?php
// Data produk dan harga
$produk = [
    'kaos' => 100000,
    'celana' => 200000,
    'topi' => 50000
];

// keranjang belanja (produk dan jumlah)
$keranjang = [
    'kaos' => 2,
    'celana' => 1,
    'topi' => 3
];

// Hitung dan total belanja
$total = 0;
foreach ($keranjang as $item => $qty) {
    if (isset($produk[$item])) {
        $total += $produk[$item] * $qty;
    }
}

// Tampilkan total belanja
echo "Total belanja: Rp. " . number_format($total, 0, ',',',');