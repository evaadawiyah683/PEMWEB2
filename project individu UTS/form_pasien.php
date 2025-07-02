<?php 
include_once 'template/top.php';
include_once 'template/navbar.php';
include_once 'template/sidebar.php';
require_once 'dbkoneksi.php';

$_idx = isset($_GET['id']) ? $_GET['id'] : null;
if ($_idx) {
    $sql = "SELECT * FROM pasien WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idx]);
    $row = $st->fetch();
    $tombol = "Ubah";
} else {
    $row = ['kode' => '', 'nama' => '', 'tmp_lahir' => '', 'tgl_lahir' => '', 'gender' => '', 'email' => '', 'alamat' => '', 'kelurahan_id' => ''];
    $tombol = "Tambah";
}

$sql_kelurahan = "SELECT * FROM kelurahan";
$rs_kelurahan = $dbh->query($sql_kelurahan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Pasien</title>
</head>
<body> 
<div class="container mt-4">
    <form action="proses_pasien.php" method="POST">
        <input type="hidden" name="idx" value="<?= $_idx ?>">

        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label font-weight-bold">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label font-weight-bold">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $row['tmp_lahir'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label font-weight-bold">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $row['tgl_lahir'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-4 font-weight-bold">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= $row['gender'] == 'L' ? 'checked' : '' ?>>
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= $row['gender'] == 'P' ? 'checked' : '' ?>>
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-4 col-form-label font-weight-bold">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" value="<?= $row['email'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label font-weight-bold">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"><?= $row['alamat'] ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="kelurahan_id" class="col-4 col-form-label font-weight-bold">Kelurahan</label>
            <div class="col-8">
                <select id="kelurahan_id" name="kelurahan_id" class="custom-select">
                    <option value="">-- Pilih Kelurahan --</option>
                    <?php foreach ($rs_kelurahan as $kel): ?>
                        <option value="<?= $kel['id'] ?>" <?= $row['kelurahan_id'] == $kel['id'] ? 'selected' : '' ?>>
                            <?= $kel['nama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary" name="proses" value="<?= $tombol ?>"><?= $tombol ?></button>
                <a href="data_pasien.php" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php include_once 'template/bottom.php'; ?>
