<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Mahasiswa</title>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <form method="post">
                <div class="card-body">
                    <h5 class="card-title">Form Nilai Mahasiswa</h5>
                    <?php
                    $ar_matkul = [
                        'DDP' => 'Dasar Dasar Pemograman',
                        'WEB1' => 'Pemograman Web 1',
                        'WEB2' => 'Pemograman Web 2',
                        'BASDAT' => 'Basis Data',
                        'UI/Ux' => 'UI/UX',
                        'JARKOM' => 'Jaringan Komputer',
                        'SE' => 'Sistem Enterprise',
                    ];

                    ?>

                    <form method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                            <div class="col-8">
                                <select id="matkul" name="matkul" class="custom-select">
                                    <option value="0">-- Pilih Mata Kuliah --</option>

                                    <?php
                                    foreach ($ar_matkul as $kode => $matkul) {
                                        echo "<option value= '$kode'>$matkul</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                            <div class="col-8">
                                <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                            <div class="col-8">
                                <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_tugas" class="col-4 col-form-label">Tugas/Praktikum</label>
                            <div class="col-8">
                                <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="simpan" type="simpan" class="btn btn-primary">simpan</button>
                            </div>
                        </div>
                        <?php
                        include_once './daftar_nilai.php';
                        ?>
                    </form>
                </div>
        </div>
    </div>
</body>

</html>