<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun, Bencana};

class Bsda extends Model
{
    use HasFactory;

    Protected $table = 'bsdas';

    Protected $fillable = [
        'tahun_id',
        'bencana_id',
        'ldes',
        'pdes',
        'lan',
        'pan',
        'ket',
        'sumber',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function bencana()
    {
        return $this->belongsTo(Bencana::class);
    }
}
