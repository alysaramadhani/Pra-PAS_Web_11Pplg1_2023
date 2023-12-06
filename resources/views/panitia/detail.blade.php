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

    <h2>Data Panitia</h2>

    <div class="form">
        <div class="form-group">
            <label for="nama_panitia">Nama Panitia</label>
            <input type="text" class="form-control" id="nama_panitia" name="nama_panitia" value="{{ $panitia->nama_panitia }}" disabled>
        </div>

        <div class="form-group">
            <label for="nama_lomba">Nama Lomba</label>
            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" value="{{ $panitia->nama_lomba }}" disabled>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $panitia->jabatan }}" disabled>
        </div>

        <div class="form-group">
            <label for="tanggal_lomba">Tanggal Lomba</label>
            <input type="text" class="form-control" id="tanggal_lomba" name="tanggal_lomba" value="{{ $panitia->tanggal_lomba }}" disabled>
        </div>

        <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $panitia->kontak }}" disabled>
        </div>
    </div>
@endsection
