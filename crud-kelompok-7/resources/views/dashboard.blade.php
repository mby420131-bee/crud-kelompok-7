<head>
    <style>

        h2 {
            color: #003366;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        .vehicle-card {
            background-color: #e9f5ff; /* Indigo Blue tint */
            border-left: 5px solid #007bff;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .vehicle-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 123, 255, 0.2);
        }
        .vehicle-card h3 {
            color: #003366;
            margin-top: 0;
        }
        .vehicle-card p {
            margin: 5px 0;
        }
        .action-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        .action-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

@extends('layouts.main')
@section('content')
<body>
    <div class="container">
        <h2>Dashboard Kendaraan</h2>
        
        <div class="card-grid">
            @foreach ( $kendaraans as $kendaraan )
            
            <div class="vehicle-card">
                <h3>Kendaraan ID: {{ $kendaraan->id }}</h3>
                <p><strong>Jenis:</strong> {{ $kendaraan->merek }}</p>
                <p><strong>Tipe:</strong> {{ $kendaraan->tipe }}</p>
                <p><strong>Kategori:</strong> {{ $kendaraan->kategori }}</p>
                <a href="{{ route('kendaraan.show', $kendaraan->id) }}" class="btn btn-info ">Lihat Detail</a>
            </div>
            
            @endforeach
        </div>
    </div>
</body>
    @endsection