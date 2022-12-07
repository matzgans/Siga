<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Prespenduduk, Pkematian, Hiv, Kmtbayi, Partsekolah,
     Ptssekolah, Klasprespend, Prespendidikan};


class Desa extends Model
{
    use HasFactory;
    protected $table = 'desas';
    Protected $fillable = [
        'nama_desa',
        'kepala_desa',
    ];

    public function pkematian()
    {
        return $this->hasMany(Pkematian::class);
    }

    public function hiv()
    {
        return $this->hasMany(Hiv::class);
    }

    public function kmtbayi()
    {
        return $this->hasMany(Kmtbayi::class);
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

    public function klasprespends()
    {
        return $this->hasMany(Klasprespend::class);
    }

    public function prespendidikans()
    {
        return $this->hasMany(Prespendidikan::class);
    }
}
