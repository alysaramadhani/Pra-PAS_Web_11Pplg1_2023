@extends('layouts.main')

@section('content')
    <style>
        .form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>

    <h2>Data Peserta</h2>

    <div class="form">
        <div class="form-group">
            <label for="nama_peserta">Nama Peserta</label>
            <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="{{ $lomba->nama_peserta }}" disabled>
        </div>

        <div class="form-group">
            <label for="nama_lomba">Nama Lomba</label>
            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" value="{{ $lomba->nama_lomba }}" disabled>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $lomba->jenis_kelamin }}" disabled>
        </div>

        <div class="form-group">
            <label for="tanggal_lomba">Tanggal Lomba</label>
            <input type="text" class="form-control" id="tanggal_lomba" name="tanggal_lomba" value="{{ $lomba->tanggal_lomba }}" disabled>
        </div>

        <div class="form-group">
            <label for="juara">Juara</label>
            <input type="text" class="form-control" id="juara" name="juara" value="{{ $lomba->juara }}" disabled>
        </div>
    </div>
@endsection
