<h1>Manajemen Kendaraan</h1>


<table border="1" cellingpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nomor Polisi</th>
            <th>Merek</th>
            <th>Tipe</th>
            <th>Warna</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kendaraans as $kendaraan)
        <tr>
            <td>{{ $kendaraan->id }}</td>
            <td>{{ $kendaraan->nomor_polisi }}</td>
            <td>{{ $kendaraan->merek }}</td>
            <td>{{ $kendaraan->tipe }}</td>
            <td>{{ $kendaraan->warna }}</td>
            <td>{{ $kendaraan->tahun }}</td>
            <td>{{ $kendaraan->kategori }}</td>
            <td>
                <a href="{{ route('kendaraan.show', $kendaraan->id) }}">
                    Lihat Detail
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">Data Kendaraan tidak dapat di temukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>