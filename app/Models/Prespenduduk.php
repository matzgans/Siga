<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Prespenduduk extends Model
{
    use HasFactory;

    Protected $table = 'prespenduduks';
    Protected $fillable = [
        'desa_id',
        'l0',
        'p0',
        'l6',
        'p6',
        'l13',
        'p13',
        'l18',
        'p18',
        'l51',
        'p51',
        'ket',
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
