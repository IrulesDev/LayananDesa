<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    /** @use HasFactory<\Database\Factories\KeluargaFactory> */
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function penduduk(){
        return $this->hasMany(penduduk::class);
    }
}
