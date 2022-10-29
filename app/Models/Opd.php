<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User};

class Opd extends Model
{
    use HasFactory;
    Protected $table = 'opds';
    Protected $fillable = [
        'nama_istansi',
        'kepala_istansi',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
