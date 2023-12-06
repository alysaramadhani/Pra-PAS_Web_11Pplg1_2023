@extends('layouts.main')

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h2>Data Hadiah</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 10%;" scope="col">ID</th>
                        <th style="width: 10%;" scope="col">Nama Lomba</th>
                        <th style="width: 30%;" scope="col">Jenis Hadiah</th>
                        <th style="width: 30%;" scope="col">Jumlah</th>
                        <th style="width: 30%;" scope="col">Tanggal Pengambilan</th>
                        <th style="width: 30%;" scope="col">Kontak</th>
                        <th style="width: 20%;" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($hadiah)
                        @foreach($hadiah as $hadiahs)
                            <tr>
                                <th scope="row">{{ $hadiahs['id'] }}</th>
                                <td>{{ $hadiahs['nama_lomba'] }}</td>
                                <td>{{ $hadiahs['jenis_hadiah'] }}</td>
                                <td>{{ $hadiahs['jumlah'] }}</td>
                                <td>{{ $hadiahs['tanggal_pengambilan'] }}</td>
                                <td>{{ $hadiahs['kontak'] }}</td>
                                <td>
                                    <a href="{{ ('/hadiah/detail/' . $hadiahs['id']) }}" class="btn btn-primary btn-sm">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
