<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Ptssekolah extends Model
{
    use HasFactory;

    Protected $table = 'ptssekolahs';

    Protected $fillable = [
        'desa_id',
        'lsd',
        'psd',
        'lsmp',
        'psmp',
        'lsma',
        'psma',
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
