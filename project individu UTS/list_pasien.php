<?php
include_once 'template/top.php';
include_once 'template/navbar.php';
include_once 'template/sidebar.php';
require_once 'dbkoneksi.php';

// Query data pasien
$list_pasien = $dbh->query("SELECT * FROM pasien");
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="container mt-5">
    <h2 class="mb-4">Data Pasien</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_pasien as $pasien) { ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $pasien['kode'] ?></td>
                    <td><?= $pasien['nama'] ?></td>
                    <td>
                        <?php if ($pasien['gender'] == 'L') : ?>
                            <span class="badge bg-primary">Laki-laki</span>
                        <?php else : ?>
                            <span class="badge bg-danger">Perempuan</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="form_pasien.php?id=<?= $pasien['id']; ?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Ubah
                        </a>
                        <a href="proses_pasien.php?idx=<?= $pasien['id']; ?>&proses=Hapus" 
                           class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once 'template/bottom.php'; ?>
