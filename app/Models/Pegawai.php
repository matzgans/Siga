<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User};

class Pegawai extends Model
{
    use HasFactory;

    Protected $table = 'pegawais';
    Protected $fillable = [
        'nik',
        'nama',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
