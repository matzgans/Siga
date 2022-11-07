<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Agama, Opd, Tahun, Klasifikasi_umur, Jabatan};

class Pegawai extends Model
{
    use HasFactory;

    Protected $table = 'pegawais';
    Protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'umur',
        'klasifikasi_umur_id',
        'agama_id',
        'opd_id',
        'jabatan_id',
        'tahun_id',
        'foto',
        'alamat',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function Klasifikasi_umur()
    {
        return $this->belongsTo(Klasifikasi_umur::class);
    }
}
