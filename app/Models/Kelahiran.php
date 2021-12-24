<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;
    protected $table = "kelahirans";
    protected $fillable = ['penduduk_id', 'nama','tempat','anak_ke','jenis_kelamin','tanggal','status'];

    public function penduduks(){
        return $this->belongsTo(Penduduk::class, 'penduduk_id');
    }
}
