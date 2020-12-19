<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Nama Kecamatan</th>
        <th>Alamat</th>
        <th>Kode POS</th>
        <th>Aksi</th>
    </tr>
    </thead>
        <tbody>
            @foreach($kecamatans as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->kode }}</td>
                <td><a href="{{ route('kecamatan.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
            </tr>
            @endforeach
        </tbody>
</table>