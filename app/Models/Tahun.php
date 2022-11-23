<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Penduduk, Pkematian, Hiv};

class Tahun extends Model
{
    use HasFactory;
    Protected $table = 'tahuns';
    Protected $fillable = [
        'nama_tahun'
    ];

    public function penduduk()
    {
        return $this->hasOne(Penduduk::class);
    }

    public function pkematian()
    {
        return $this->hasOne(Pkematian::class);
    }

    public function hiv()
    {
        return $this->hasOne(Hiv::class);
    }
}
