<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar'; 
    protected $fillable = ['nomor_kamar', 'tipe', 'harga_bulanan', 'fasilitas', 'status'];
}