<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun, Desa};

class Aktkerja extends Model
{
    use HasFactory;

    protected $table = 'aktkerjas';

    protected $fillable = [
        'desa_id',
        'tahun_id',
        'ket',
        'sumber',
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
