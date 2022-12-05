<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun};

class Jumguru extends Model
{
    use HasFactory;

    Protected $table = 'jumgurus';

    Protected $fillable = [
        'l',
        'p',
        'jum',
        'tahun_id',
        'ket',
        'sumber',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    
}
