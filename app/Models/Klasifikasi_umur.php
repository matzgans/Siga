<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penduduk;

class Klasifikasi_umur extends Model
{
    use HasFactory;
    Protected $table = 'klasifikasi_umurs';
    Protected $fillable = [
        'umur',
        'kategori'
    ];

    public function penduduk()
    {
        return $this->hasOne(Penduduk::class);
    }
}
