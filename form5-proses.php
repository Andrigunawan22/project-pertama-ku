<?php

$kata = $_POST['kata'];
if (strrev($kata) == $kata) {
    echo "palindrom";
} else {
    echo "Bukan palindrom";
}