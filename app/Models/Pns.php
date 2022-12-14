<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun};

class Pns extends Model
{
    use HasFactory;
    protected $table = 'pns';
    protected $fillable = [
        'tahun_id',
        'golongan',
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
