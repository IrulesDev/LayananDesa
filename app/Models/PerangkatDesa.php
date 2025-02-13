<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    /** @use HasFactory<\Database\Factories\PerangkatDesaFactory> */
    use HasFactory;
    protected $fillable = [
        'pengajuan_id',
        'perangkat_type',
    ];

    public function pengajuan(){
        return $this->belongsToMany(PengajuanLayanan::class);
    }

    public function pendudukTable(){
        return $this->morphToMany(penduduk::class,'pendudukable');
    }
}
