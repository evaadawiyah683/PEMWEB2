<?php

$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

/**
 * Nilai didalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimulai dari 0
 */

echo $list_buah[2];
echo "<br>list berisi " . count($list_buah) . "buah";

// mencetak seluruh nilai di dalam array
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menambahkan nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mengubah niali array berdasarkan index
$list_buah[0] = "Manggis";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Mencetak seluruh niali array beserta indexnya
echo "<ol>";
foreach($list_buah as $index => $buah) {
    echo "<li> Buah dengan index $index adalah $buah</li>";
}
echo "</ol>";





