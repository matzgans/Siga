<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Pegawai};

class Jabatan extends Model
{
    use HasFactory;

    Protected $table = 'jabatans';
    Protected $fillable = [
        'status_jabatan',
    ];

    public function pegawai()
    {
        return $this->hasOne(Pegawai::class);
    }
}
