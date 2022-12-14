<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun};

class Dprd extends Model
{
    use HasFactory;
    protected $table = 'dprds';
    protected $fillable = [
        'tahun_id',
        'komisi',
        'l',
        'p',
        'ket',
        'sumber',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
