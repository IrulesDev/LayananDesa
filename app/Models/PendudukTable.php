<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukTable extends Model
{
    /** @use HasFactory<\Database\Factories\PendudukTableFactory> */
    use HasFactory;
    protected $fillable = [
        'penduduk_id',
        'pendudukTable_id',
        'layanan_type'
    ];

    // public function penduduk(){
    //     return $this->belongsTo(penduduk::class);
    // }

    public function pengajuanLayanan(){
        return $this->morphTo();
    }
}
