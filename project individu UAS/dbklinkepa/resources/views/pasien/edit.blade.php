<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center"> Edit Pasien</h1>
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3 col-10">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{ $pasien->kode }}">
        </div>
        <div class="mb-3 col-10">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pasien->nama }}">
        </div>
        <div class="mb-3 col-10">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $pasien->tmp_lahir }}">
        </div>
        <div class="mb-3 col-10">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}">
        </div>
        <div class="mb-3 col-10">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select">
                <option value="">-- Pilih Jenis Kelamin --</option> 
                <option value="L" {{ $pasien->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $pasien->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3 col-10">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pasien->alamat }}">
        </div>
        <div class="mb-3 col-10">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pasien->email }}">
        </div>
        <div class="mb-3 col-10">
            <label for="kelurahan_id" class="form-label">Kelurahan</label>
            <select name="kelurahan_id" id="kelurahan_id" class="form-select">
                <option value="">-- Pilih Kelurahan --</option>
                @foreach ($data_kelurahan as $kelurahan)
                    <option value="{{ $kelurahan->id }}" {{ $pasien->kelurahan_id === $kelurahan->id ? 'selected' : '' }}>{{ $kelurahan->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>