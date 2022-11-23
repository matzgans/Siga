<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User, Penduduk, Pkematian, Hiv};


class Desa extends Model
{
    use HasFactory;
    protected $table = 'desas';
    Protected $fillable = [
        'nama_desa',
        'kepala_desa',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class);
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
