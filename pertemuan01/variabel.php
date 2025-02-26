<?php

// variabel user
$nama_depan = "Eva";
$nama_belakang = "Adawiyah";
$umur = 19;
$tb = 158;
$bb = 45;

echo $nama_depan . " " . $nama_belakang;
echo "<br>Nama Saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

// variabel system
echo 'Dokumen Root' . $_SERVER
['DOCUMENT_ROOT'];

// varaiabel constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari jari {$r}cm memiliki luas {$luas}cm2";
