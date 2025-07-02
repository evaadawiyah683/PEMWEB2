@include('template.top')
@include('template.navbar')
@include('template.sidebar')
<div class="content-wrapper">
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
            <h1 class="text-center mt-2">List Unit Kerja</h1>
            <a href="{{ route('unit_kerja.create') }}" class="btn btn-primary mb-4">Tambah Unit Kerja</a>
            <table class="table bordered table-striped table-striped text-center mt-3">
                <thead>
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($data_unit_kerja as $unit_kerja)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $unit_kerja->nama }}</td>
                        <td>
                            <a href="{{ route('unit_kerja.edit', $unit_kerja->id) }}" class="btn btn-warning bi bi-pencil">Edit</a>
                            <form action="{{ route('unit_kerja.destroy', $unit_kerja->id) }}" method="POST" class="d-inline">
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