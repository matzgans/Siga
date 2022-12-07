<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\{Bsda};

class Bencana extends Model
{
    use HasFactory;

    Protected $table = 'bencanas';

    Protected $fillable = [
        'nama_bencana',
    ];

    public function bsdas()
    {
        return $this->hasMany(Bsda::class);
    }
}
