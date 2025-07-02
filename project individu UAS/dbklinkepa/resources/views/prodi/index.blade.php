<h3>{{ $judul }}</h3>
<table class="table table-bordered" width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ar_prodi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
            </tr>
        @endforeach
    </tbody>
</table>