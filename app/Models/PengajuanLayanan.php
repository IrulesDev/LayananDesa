<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanLayanan extends Model
{
    /** @use HasFactory<\Database\Factories\PengajuanLayananFactory> */
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    
    public function perangkat_desa(){
        return $this->hasOne(PerangkatDesa::class);
    }
    
    public function layanan_desa(){
        return $this->hasOne(LayananDesa::class);
    }
    public function pendudukTable(){
        return $this->morphToMany(penduduk::class,'pendudukable');
    }
}
