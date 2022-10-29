<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Penduduk};

class Agama extends Model
{
    use HasFactory;
    Protected $table = 'agamas';
    Protected $fillable = [
        'nama_agama'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
}
