<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    Protected $table = 'opds';
    Protected $fillable = [
        'nama_istansi',
        'kepala_istansi',
    ];
}
