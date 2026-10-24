@extends('layouts.main')
@section('content')
<h1>Tambah Data Kendaraan</h1>

<form action="{{ route('kendaraan.store') }}" method="post">
    @csrf
    <div class="col-auto">
        <p>
            <lable>Nomor Polisi</lable>
        <input type="text" name="nomor_polisi" required class="form-control text-uppercase ">
    </p>
    <p>
        <lable>Merek</lable>
        <input type="text" name="merek" required class="form-control">
    </p>
    <p>
        <lable>Tipe</lable>
        <input type="text" name="tipe" required class="form-control">
    </p>
    <p>
        <lable>Warna</lable>
        <input type="text" name="warna" required class="form-control">
    </p>
    <p>
        <lable>Tahun</lable>
        <input type="number" min="1000" max="2026" step="1" value="2026" name="tahun" required class="form-control">
    </p>
    <p>
        <lable>Kategori</lable>
        <input type="text" name="kategori" required class="form-control">
    </p>
    <p>
        <lable>Keterangan</lable><br>
        <textarea name="keterangan" placeholder="Opsional" class="form-control"></textarea>
    </p>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>
<br>
<p>
    <a href="{{ route('kendaraan.index') }}" class="btn btn-outline-info btn-md">
        Kembali
    </a>
</p>
@endsection