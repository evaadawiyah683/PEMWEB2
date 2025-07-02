@include('template.top')
@include('template.navbar')
@include('template.sidebar')

<div class="content-wrapper">
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">

            <h1 class="mb-4 mt-2">List Kelurahan</h1>
            <a href="{{ route('kelurahan.create') }}" class="btn btn-primary mb-4">Tambah Kelurahan</a>

            <table class="table table-bordered table-striped text-center mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_kelurahan as $kelurahan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kelurahan->nama }}</td>
                            <td>
                                <a href="{{ route('kelurahan.edit', $kelurahan->id) }}" class="btn btn-warning bi bi-pencil">Edit</a>
                                <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="POST" class="d-inline">
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
