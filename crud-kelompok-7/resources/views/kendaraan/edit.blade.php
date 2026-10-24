<h1>Edit Data Kendaraan</h1>

<form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="post">
    @csrf
    @method('PUT')
    <p>
        <lable>Nomor Polisi</lable>
        <input type="text" name="nomor_polisi" class="form-control text-uppercase" required value="{{ $kendaraan->nomor_polisi }}">
    </p>
    <p>
        <lable>Merek</lable>
        <input type="text" name="merek" required value="{{ $kendaraan->merek }}">
    </p>
    <p>
        <lable>Tipe</lable>
        <input type="text" name="tipe" required value="{{ $kendaraan->tipe }}">
    </p>
    <p>
        <lable>Warna</lable>
        <input type="text" name="warna" required value="{{ $kendaraan->warna }}">
    </p>
    <p>
        <lable>Tahun</lable>
        <input type="number" min="1000" max="2026" step="1" value="2026" name="tahun" required value="{{ $kendaraan->tahun }}">
    </p>
    <p>
        <lable>Kategori</lable>
        <input type="text" name="kategori" required value="{{ $kendaraan->kategori }}">
    </p>
    <p>
        <lable>Keterangan</lable><br>
        <textarea name="keterangan" placeholder="Opsional" style="resize:none;" value="{{ $kendaraan->keterangan }}"></textarea>
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('kendaraan.index') }}">
        Kembali
    </a>
</p>