<?php

if (isset($_POST['simpan'])) {
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $_nama</p>";
    echo "<p>Mata Kuliah : $_matkul</p>";
    echo "<p>Nilai UTS : $_nilai_uts</p>";
    echo "<p>Nilai UAS : $_nilai_uas</p>";
    echo "<p>Nilai Tugas/Praktikum : $_nilai_tugas</p>";

    //status kelulusan
    $nilai_total = ($_nilai_uts * 0.3) + ($_nilai_uas * 0.35) + ($_nilai_tugas * 0.35);

    //Check nilai total
    if ($nilai_total > 50) {
        echo "<p>Status: Lulus</p>";
    } else {
        echo "<p>Status : Tidak Lulus</p>";
    }

    // Fungsi untuk menentukan grade
    function getGrade($nilai) {
        if ($nilai < 0 || $nilai > 100) {
            return "I";
        } elseif ($nilai >= 85) {
            return "A";
        } elseif ($nilai >= 70) {
            return "B";
        } elseif ($nilai >= 56) {
            return "C";
        } elseif ($nilai >= 36) {
            return "D";
        } else {
            return "E";
        }
    }

    // Menentukan grade
    $grade = getGrade($nilai_total);

    // Menentukan predikat berdasarkan grade
    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }

    // Menampilkan hasil
    echo "<h2>Hasil Penilaian</h2>";
    echo "<p>Nama: $_nama</p>";
    echo "<p>Mata Kuliah: $_matkul</p>";
    echo "<p>Nilai UTS: $_nilai_uts</p>";
    echo "<p>Nilai UAS: $_nilai_uas</p>";
    echo "<p>Nilai Tugas/Praktikum: $_nilai_tugas</p>";
    echo "<p>Nilai Total: $nilai_total</p>";
    echo "<p>Grade: <strong>$grade</strong></p>";
    echo "<p>Predikat: <strong>$predikat</strong></p>";

    // Status kelulusan
    if ($nilai_total > 50) {
        echo "<p>Status: <strong>Lulus</strong></p>";
    } else {
        echo "<p>Status: <strong>Tidak Lulus</strong></p>";
    }
}
?>

