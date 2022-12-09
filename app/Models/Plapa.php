<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun, Tahanan};

class Plapa extends Model
{
    use HasFactory;
    Protected $table = 'plapas';
    protected $fillable = [
        'tahun_id',
        'tahanan_id',
        'l',
        'p',
        'sumber',
        'ket',
    ];

    public function tahanan()
    {
        return $this->belongsTo(Tahanan::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
