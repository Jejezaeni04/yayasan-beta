<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $fillable = [
        'bulan',
        'tahun',
        'nama_kandidat',
        'email',
        'foto_kandidat',
        'pendidikan',
        'pekerjaan',
        'tinggi_badan',
        'berat_badan',
        'bahasa',
        'kebudayaan',
        'musik',
        'pengetahuan',
        'approve',
    ];
}
