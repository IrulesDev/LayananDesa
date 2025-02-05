<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendudukable extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukTableFactory> */
    use HasFactory;
    protected $fillable = [
        'penduduk_id',
        'pendudukable_id',
        'layanan_type'
    ];

    // public function penduduk(){
    //     return $this->belongsTo(penduduk::class);
    // }

    
    public function penduduk(){
        return $this->belongsTo(Penduduk::class);
    }

    public function Layanan(){
        return $this->morphByMany(LayananDesa::class,'pendudukable');
    }

    public function pengajuan(){
        return $this->morphByMany(PengajuanLayanan::class,'pendudukable');
    }

    public function perangkat(){
        return $this->morphByMany(PerangkatDesa::class,'pendudukable');
    }
}
