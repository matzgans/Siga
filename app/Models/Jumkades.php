<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun};

class Jumkades extends Model
{
    use HasFactory;

    protected $table =  'jumkades';
    protected $fillable = [
        'tahun_id',
        'sumber',
        'ket',
        'l',
        'p',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
