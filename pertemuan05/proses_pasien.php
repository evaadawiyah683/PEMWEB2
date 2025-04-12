<?php
require_once 'dbkoneksi.php';

$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan_id = $_POST['kelurahan_id']; 

$data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];

$_proses = $_POST['proses'];

if ($_proses == "Tambah") {
    $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

} elseif ($_proses == "Ubah") {
    $_idx = $_POST['idx'];
    $data[] = $_idx;

    $sql = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, 
            gender=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

} elseif ($_proses == "Hapus") {
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM pasien WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_idx]);
}

header('Location: list_pasien.php');
exit();
?>
