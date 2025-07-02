@include('template.top')
@include('template.navbar')
@include('template.sidebar')
<div class="content-wrapper">
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
            <h2 class="text-center mt-5">Data Pasien</h2>
            <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
            <table class="table border table-striped text-center mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">JK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">email</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pasien as $pasien)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $pasien->kode }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>
                            @if($condition = $pasien->jk == 'L')
                            Laki-laki
                            @elseif($condition = $pasien->jk == 'P')
                            Perempuan
                            @endif
                        </td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->email }}</td>
                        <td>{{ $pasien->kelurahan->nama }}</td>
                        <td>
                            <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('pasien.destroy', $pasien->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </section>
</div>
@include('template.bottom')