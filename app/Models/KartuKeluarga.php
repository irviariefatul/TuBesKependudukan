<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $fillable = ['nomor','penduduk_id', 'status'];

    public function penduduks(){
        return $this->belongsTo(Penduduk::class, 'penduduk_id');
    }

    public function detail_kks(){
        return $this->hasMany(DetailKk::class);
    }
}
