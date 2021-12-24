<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;
    protected $table = 'kematians';
    protected $fillable = ['penduduk_id', 'tanggal', 'alasan', 'tempat','status'];

    public function penduduks(){
        return $this->belongsTo(Penduduk::class, 'penduduk_id');
    }
}
