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

    <h2>Data Hadiah</h2>

    <div class="form">
        <div class="form-group">
            <label for="nama_lomba">Nama Lomba</label>
            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" value="{{ $hadiah->nama_lomba }}" disabled>
        </div>

        <div class="form-group">
            <label for="jenis_hadiah">jenis hadiah</label>
            <input type="text" class="form-control" id="jenis_hadiah" name="jeniss_hadiah" value="{{ $hadiah->jenis_hadiah }}" disabled>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $hadiah->jumlah }}" disabled>
        </div>

        <div class="form-group">
            <label for="tanggal_pengambilan">Tanggal Pengambilan</label>
            <input type="text" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" value="{{ $hadiah->tanggal_pengambilan }}" disabled>
        </div>

        <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $hadiah->kontak }}" disabled>
        </div>
    </div>
@endsection
