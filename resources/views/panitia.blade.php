@extends('layouts.main')

@section('content')
    <style>
        .table-responsive {
            max-width: 800px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #3498db;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>

    <div class="table-responsive">
        <h2>Data Panitia</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 10%;" scope="col">ID</th>
                    <th style="width: 15%;" scope="col">Nama Panitia</th>
                    <th style="width: 20%;" scope="col">Nama Lomba</th>
                    <th style="width: 15%;" scope="col">Jabatan</th>
                    <th style="width: 15%;" scope="col">Tanggal Lomba</th>
                    <th style="width: 15%;" scope="col">Kontak</th>
                    <th style="width: 10%;" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @isset($panitia)
                    @foreach($panitia as $panitias)
                        <tr>
                            <td>{{ $panitias['id'] }}</td>
                            <td>{{ $panitias['nama_panitia'] }}</td>
                            <td>{{ $panitias['nama_lomba'] }}</td>
                            <td>{{ $panitias['jabatan'] }}</td>
                            <td>{{ $panitias['tanggal_lomba'] }}</td>
                            <td>{{ $panitias['kontak'] }}</td>
                            <td>
                                <a href="{{ ('/panitia/detail/' . $panitias['id' ]) }}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection
