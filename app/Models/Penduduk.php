<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'keluarga_id',
        'nik',
    ];

    public function keluarga(){
        return $this->belongsTo(Keluarga::class);
    }
    public function pendudukTable(){
        return $this->hasOne(Pendudukable::class);
    }
}
