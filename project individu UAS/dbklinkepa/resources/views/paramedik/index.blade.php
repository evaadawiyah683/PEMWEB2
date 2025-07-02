@include('template.top')
@include('template.navbar')
@include('template.sidebar')
<div class="content-wrapper">
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
    <h1 class="text-center">List Paramedik</h1>
    <a href="{{ route('paramedik.create') }}" class="btn btn-primary">Tambah Paramedik</a>
    <table class="table bordered table-striped table-striped text-center mt-3">
        <thead>
            <tbody>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>unit kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_paramedik as $paramedik)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paramedik->nama }}</td>
                    <td>{{ $paramedik->kategori }}</td>
                    <td>{{ $paramedik->unit_kerja->nama }}</td>
                    <td>
                        <a href="{{ route('paramedik.edit', $paramedik->id) }}" class="btn btn-warning bi bi-pencil">Edit</a>
                        <form action="{{ route('paramedik.destroy', $paramedik->id) }}" method="POST" class="d-inline">
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