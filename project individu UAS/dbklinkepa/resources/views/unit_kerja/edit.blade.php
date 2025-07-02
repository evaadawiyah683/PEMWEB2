<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
    <h1 class="text-center">Edit Unit Kerja</h1>
    <form action="{{ route('unit_kerja.update', $unit_kerja->id) }}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3 col-10">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $unit_kerja->nama }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>