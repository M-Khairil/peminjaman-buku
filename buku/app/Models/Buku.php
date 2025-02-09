<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'namaPeminjam', 
        'namaBuku', 
        'jumlahBuku', 
        'tanggalPinjam', 
        'tanggalKembali', 
        'denda'
    ];    
}
