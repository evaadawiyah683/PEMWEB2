@include('template.top')
@include('template.navbar')
@include('template.sidebar')
<div class="content-wrapper">
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
    <h1 class="text-center">List Periksa</h1>
    <a href="{{ route('periksa.create') }}" class="btn btn-primary">Tambah Periksa</a>
    <table class="table bordered table-striped table-striped text-center mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nama Paramedik</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_periksa as $periksa)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $periksa->tanggal }}</td>
                <td>{{ $periksa->pasien->nama }}</td>
                <td>{{ $periksa->paramedik->nama }}</td>
                <td>{{ $periksa->keterangan }}</td>
                <td>
                    <a href="{{ route('periksa.edit', $periksa->id) }}" class="btn btn-warning bi bi-pencil">Edit</a>
                    <form action="{{ route('periksa.destroy', $periksa->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bi bi-trash">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
</div>
@include('template.bottom')