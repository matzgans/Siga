<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Tahun};
class Ipha extends Model
{
    use HasFactory;
    protected $table = 'iphas';
    protected $fillable = [
        'klaster',
        'tahun_id',
        'bobot',
    ];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
