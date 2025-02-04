<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananDesa extends Model
{
    /** @use HasFactory<\Database\Factories\LayananDesaFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'pengajuan_id'
    ];

    public function pengajuan(){
        return $this->belongsTo(PengajuanLayanan::class);
    }

    public function penduduk(){
        return $this->morphToMany(penduduk::class,'pendudukTable');
    }
}
