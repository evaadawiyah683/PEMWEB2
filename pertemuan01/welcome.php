<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
</head>

<body>
    <h3>Selamat Belajar Web</h3>
    <?php
    $_nama = "Budi Darmawan";
    $_umur = 20;
    $_berat = 60.5;
    $_prodi = "sistem informasi";
    $_kampus = "STT Terpadu Nurul Fikri";
    echo "Hallo, saya $_nama, saya berusia $_umur tahun";
    echo "<br>";
    ?>
    <hr/>
    <?php
    echo "Berat badan saya $_berat kg";
    echo "<br>";
    echo "saya kuliah di prodi $_prodi";
    ?>
    <br> Saya kuliah  di kampus <strong><?= $_kampus?></strong>
</body>
</html>