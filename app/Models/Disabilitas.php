<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Disabilitas extends Model
{
    use HasFactory;
    protected $table = 'disabilitas';
    protected $fillable = [
        'desa_id',
        'tahun_id',
        'jenis_disabilitas',
        'l',
        'p',
        'ket',
        'sumber',
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
