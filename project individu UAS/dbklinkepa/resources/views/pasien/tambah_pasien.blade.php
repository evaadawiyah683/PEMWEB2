<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Tambah Pasien</title>
</head>
<body>
    <h2 class="text-center mt-5">Tambah Pasien</h2>
    <form action="{{ route('pasien.store') }}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" name="kode" id="kode" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control"><br>
        </div>
        <div class="mb-3">
            <label for="kelurahan_id" class="form-label">Kelurahan</label>
            <select name="kelurahan_id" id="kelurahan_id" class="form-select">
                <option value="">-- Pilih Kelurahan --</option>
                @foreach ($data_kelurahan as $kelurahan)
                    <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>