<h1>Tambah Data Kendaraan</h1>

<form action="{{ route('kendaraan.store') }}" method="post">
    @csrf
    <p>
        <lable>Nomor Polisi</lable>
        <input type="text" name="nomor_polisi" required>
    </p>
    <p>
        <lable>Merek</lable>
        <input type="text" name="merek" class="form-control text-uppercase" required>
    </p>
    <p>
        <lable>Tipe</lable>
        <input type="text" name="tipe" required>
    </p>
    <p>
        <lable>Warna</lable>
        <input type="text" name="warna" required>
    </p>
    <p>
        <lable>Tahun</lable>
        <input type="number" min="1000" max="2026" step="1" value="2026" name="tahun" required>
    </p>
    <p>
        <lable>Kategori</lable>
        <input type="text" name="kategori" required>
    </p>
    <p>
        <lable>Keterangan</lable><br>
        <textarea name="keterangan" placeholder="Opsional" style="resize:none;"></textarea>
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('kendaraan.index') }}">
        Kembali
    </a>
</p>