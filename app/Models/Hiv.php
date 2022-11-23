<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Hiv extends Model
{
    use HasFactory;

    Protected $table = 'hivs';

    Protected $fillable = [
        'desa_id',
        'l',
        'p',
        'ket',
        'tahun_id',
        'sumber'
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
