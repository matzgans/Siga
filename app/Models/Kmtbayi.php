<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};
class Kmtbayi extends Model
{
    use HasFactory;

    Protected $table = 'kmtbayis';

    Protected $fillable = [
        'desa_id',
        'tahun_id',
        'l',
        'p',
        'ket',
        'sumber',
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
