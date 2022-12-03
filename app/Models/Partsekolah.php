<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Partsekolah extends Model
{
    use HasFactory;

    Protected $table = 'partsekolahs';
    Protected $fillable = [
        'desa_id',
        'tahun_id',
        'l7',
        'p7',
        'l13',
        'p13',
        'l16',
        'p16',
        'l19',
        'p19',
        'sumber',
        'ket',
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
