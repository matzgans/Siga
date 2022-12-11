<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun, Desa};

class Jumkerlok extends Model
{
    use HasFactory;
    protected $table = 'jumkerloks';
    protected $fillable = [
        'desa_id',
        'tahun_id',
        'bs',
        'sd',
        'smp',
        'sma',
        'pt',
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
