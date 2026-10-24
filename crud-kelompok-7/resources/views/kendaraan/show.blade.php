<h1>Detail Kendaraan</h1>

<p>
    ID : {{ $kendaraan->id }}<br>
    Nomor Polisi : {{ $kendaraan->nomor_polisi }}<br>
    Merek : {{ $kendaraan->merek }}<br>
    Tipe : {{ $kendaraan->tipe }}<br>
    Warna : {{ $kendaraan->warna }}<br>
    Tahun : {{ $kendaraan->tahun }}<br>
    Kategori : {{ $kendaraan->kategori }}<br>
    Keterangan : <br>
    {{ $kendaraan->keterangan }}
</p>

<p>
    <a href="{{ route('kendaraan.index') }}">
        Kembali
    </a>
</p>