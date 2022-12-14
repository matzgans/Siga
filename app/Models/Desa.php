<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Prespenduduk, Pkematian, Hiv, Kmtbayi, Partsekolah,
            Ptssekolah, Klasprespend, Prespendidikan, Aktkerja, Disabilitas, Jumkekerasan,
            Jumkerlok
    };


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

    public function aktkerjas()
    {
        return $this->hasMany(Aktkerja::class);
    }

    public function disabilitas()
    {
        return $this->hasMany(Disabilitas::class);
    }

    public function jumkekerasans()
    {
        return $this->hasMany(Jumkekerasan::class);
    }

    public function jumkerloks()
    {
        return $this->hasMany(Jumkerlok::class);
    }
}
