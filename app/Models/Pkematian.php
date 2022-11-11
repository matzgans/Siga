<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Pkematian extends Model
{
    use HasFactory;

    Protected $table = 'pkematians';
    protected $fillable = [
        'desa_id',
        'jum_partuslama',
        'jum_infeksi',
        'jum_hirpetensi',
        'jum_pendarahan',
        'jum_penyebablain',
        'sumber',
        'tahun_id',
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
