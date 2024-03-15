<?php

$temporaryFolder = $_FILES['Foto'] ['tmp_name'];
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES ['Foto'] ['name']);

move_uploaded_file($temporaryFolder, $target_file);

echo 'Halo ' . $_POST['Nama_Lengkap'] . '<br>';
echo 'Alamat kamu : ' . $_POST['Alamat_Saya'] . '<br>';
// echo 'Foto Kamu : ' . $_FILES['Foto'] ['tmp_name'] . '<br>';
echo '<img width="500px" src="/BELAJAR/uploads/' . $_FILES
['Foto'] ['name'] . '">';