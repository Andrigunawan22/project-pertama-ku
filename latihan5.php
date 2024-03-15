<?php
//mengecek apakah string sebuah palindron atau tidak

$kata = "malam"

if (strrev($kata) == $kata) {
    echo "palindrom";
} else {
    echo "Bukan palindrom";
}