<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Pkematian, Hiv, Kmtbayi, Prespenduduk, Partsekolah, Ptssekolah, 
                Jumguru, Bsda, Klasprespend, Prespendidikan, Aktkerja,
                Jumkades, Plapa, Disabilitas, Jumkekerasan, Jumkerlok,
                Pns, Dprd, Ipha
            };

class Tahun extends Model
{
    use HasFactory;
    Protected $table = 'tahuns';
    Protected $fillable = [
        'nama_tahun'
    ];

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class);
    }

    public function pkematians()
    {
        return $this->hasMany(Pkematian::class);
    }

    public function hivs()
    {
        return $this->hasMany(Hiv::class);
    }

    public function kmtbayis()
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

    public function jumgurus()
    {
        return $this->hasMany(Jumguru::class);
    }
    
    public function bsdas()
    {
        return $this->hasMany(Bsda::class);
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

    public function jumkades()
    {
        return $this->hasMany(Jumkades::class);
    }

    public function plapas()
    {
        return $this->hasMany(Plapa::class);
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

    public function pns()
    {
        return $this->hasMany(Pns::class);
    }

    public function dprds()
    {
        return $this->hasMany(Dprd::class);
    }

    public function iphas()
    {
        return $this->hasMany(Iphas::class);
    }
}
