<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Edit Paramedik</h1>
    <form action="{{ route('paramedik.update', $paramedik->id) }}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3 col-10">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $paramedik->nama }}">
        </div>
        <div class="mb-3 col-10">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="">-- Pilih Gender --</option>
                <option value="L" {{ $paramedik->gender === 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $paramedik->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3 col-10">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $paramedik->tmp_lahir }}">
        </div>
        <div class="mb-3 col-10">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $paramedik->tgl_lahir }}">
        </div>
        <div class="mb-3 col-10">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select">
                <option value="">-- Pilih Kategori --</option>
                <option value="Umum" {{ $paramedik->kategori === 'Umum' ? 'selected' : '' }}>Umum</option>
                <option value="Jantung" {{ $paramedik->kategori === 'Jantung' ? 'selected' : '' }}>Jantung</option>
                <option value="Mata" {{ $paramedik->kategori === 'Mata' ? 'selected' : '' }}>Mata</option>
                <option value="Paru" {{ $paramedik->kategori === 'Paru' ? 'selected' : '' }}>Paru</option>
                <option value="Gigi" {{ $paramedik->kategori === 'Gigi' ? 'selected' : '' }}>Gigi</option>
                <option value="Kulit" {{ $paramedik->kategori === 'Kulit' ? 'selected' : '' }}>Kulit</option>
                <option value="Kandungan" {{ $paramedik->kategori === 'Kandungan' ? 'selected' : '' }}>Kandungan</option>
                <option value="Kesehatan" {{ $paramedik->kategori === 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                <option value="Lainnya" {{ $paramedik->kategori === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
        </div>
        <div class="mb-3 col-10">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $paramedik->telepon }}">
        </div>
        <div class="mb-3 col-10">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ $paramedik->alamat }}</textarea>
        </div>
        <div class="mb-3 col-10">
            <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
            <select name="unit_kerja_id" id="unit_kerja_id" class="form-select">
                <option value="">-- Pilih Unit Kerja --</option>
                @foreach ($data_unit_kerja as $unit_kerja)
                    <option value="{{ $unit_kerja->id }}" {{ $paramedik->unit_kerja_id === $unit_kerja->id ? 'selected' : '' }}>{{ $unit_kerja->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>