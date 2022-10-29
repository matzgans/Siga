<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Penduduk};

class Pekerjaan extends Model
{
    use HasFactory;
    Protected $table = 'pekerjaans';
    Protected $fillable = [
        'nama_pekerjaan',
    ];

    public function penduduk()
    {
        return $this->hasOne(Penduduk::class);
    }
}
