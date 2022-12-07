<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahanan extends Model
{
    use HasFactory;

    Protected $table = 'tahanans';

    Protected $fillable = [
        'jenis_tahanan'
    ];
}
