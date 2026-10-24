@extends('layouts.main')
@section('content')
<h1>Manajemen Kendaraan</h1>

<p>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary btn-md">
        Tambah Data Kendaraan
    </a>
</p>

@session('success')
<p style="color: green;">
    {{ session('success') }}
</p>
@endsession


<table class="table table-bordered table-hover">
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
                <a href="{{ route('kendaraan.show', $kendaraan->id) }}" class="btn btn-outline-info btn-sm">
                    Lihat Detail
                </a>
                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-outline-warning btn-sm">
                    Edit
                </a>
                <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger btn-sm"
                        onclick="return confirm('Apakah Anda yakin ingin mengahpus Data Kendaraan ini ?')">
                            Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">Data Kendaraan tidak dapat di temukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection