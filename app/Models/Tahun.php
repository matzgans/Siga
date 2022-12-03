<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Pkematian, Hiv, Kmtbayi, Prespenduduk, Partsekolah, Ptssekolah};

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

    public function kmtbayi()
    {
        return $this->hasOne(Kmtbayi::class);
    }

    public function prespenduduks()
    {
        return $this->hasMany(Prespenduduk::class);
    }

    public function partsekolahs()
    {
        return $this->hasMany(Partsekolah::class);
    }

    public function ptssekolahs()
    {
        return $this->hasMany(Ptssekolah::class);
    }
}
