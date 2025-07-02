<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Edit Periksa</h1>
    <form action="{{ route('periksa.update', $data_periksa->id) }}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3 col-10">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data_periksa->tanggal }}">
        </div>
        <div class="mb-3 col-10">
            <label for="berat" class="form-label">Berat</label>
            <input type="text" class="form-control" id="berat" name="berat" value="{{ $data_periksa->berat }}">
        </div>
        <div class="mb-3 col-10">
            <label for="tinggi" class="form-label">Tinggi</label>
            <input type="text" class="form-control" id="tinggi" name="tinggi" value="{{ $data_periksa->tinggi }}">
        </div>
        <div class="mb-3 col-10">
            <label for="tensi" class="form-label">Tensi</label>
            <input type="text" class="form-control" id="tensi" name="tensi" value="{{ $data_periksa->tensi }}">
        </div>
        <div class="mb-3 col-10">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $data_periksa->keterangan }}">
        </div>
        <div class="mb-3 col-10">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select name="pasien_id" id="pasien_id" class="form-select">
                <option value="">-- Pilih Pasien --</option>
                @foreach ($data_pasien as $pasien)
                    <option value="{{ $pasien->id }}" {{ $pasien->id == $data_periksa->pasien_id ? 'selected' : '' }}>{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 col-10">
            <label for="paramedik_id" class="form-label">Paramedik</label>
            <select name="paramedik_id" id="paramedik_id" class="form-select">
                <option value="">-- Pilih Paramedik --</option>
                @foreach ($data_paramedik as $paramedik)
                    <option value="{{ $paramedik->id }}" {{ $paramedik->id == $data_periksa->paramedik_id ? 'selected' : '' }}>{{ $paramedik->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>