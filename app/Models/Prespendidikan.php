<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Tahun};

class Prespendidikan extends Model
{
    use HasFactory;

    protected $table = 'prespendidikans';

    protected $fillable = [
        'desa_id',
        'tahun_id',
        'ket',
        'sumber',
        'lb',
        'pb',
        'lsd',
        'psd',
        'lsmp',
        'psmp',
        'lsma',
        'psma',
        'lpt',
        'ppt',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
