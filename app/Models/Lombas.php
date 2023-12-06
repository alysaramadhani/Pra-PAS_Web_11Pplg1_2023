<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lombas
{
    private static $lomba = [
        ["id" => 1, "nama peserta" => "Alysa", "nama lomba" => "Voli", "tanggal lomba" => "11-11-23", "jenis kelamin" => "perempuan", "juara" => "1"],
        ["id" => 2, "nama peserta" => "Icha", "nama lomba" => "sepak bola", "tanggal lomba" => "12-11-23", "jenis kelamin" => "perempuan", "juara" => "4"],
        ["id" => 3, "nama peserta" => "Okta", "nama lomba" => "Badminton", "tanggal lomba" => "13-11-23", "jenis kelamin" => "perempuan", "juara" => "2"],
        ["id" => 4, "nama peserta" => "Rilo", "nama lomba" => "Maraton", "tanggal lomba" => "14-11-23", "jenis kelamin" => "Laki-Laki", "juara" => "5"],
        ["id" => 5, "nama peserta" => "Rama", "nama lomba" => "Tenis", "tanggal lomba" => "15-11-23", "jenis kelamin" => "Laki-Laki", "juara" => "3"],
        ["id" => 6, "nama peserta" => "Ganiy", "nama lomba" => "Golf", "tanggal lomba" => "16-11-23", "jenis kelamin" => "Laki-Laki", "juara" => "1"],
        ["id" => 7, "nama peserta" => "dhani", "nama lomba" => "Tenis", "tanggal lomba" => "17-11-23", "jenis kelamin" => "Laki-Laki", "juara" => "2"],
       
    ];
    

    public static function all()
    {
        return self::$lombas; 
    }
}
