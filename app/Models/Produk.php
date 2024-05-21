<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // fillabe field yang akan di isi
    protected $fillable = ['nama', 'deskripsi', 'harga', 'image'];
    protected $visible = ['nama', 'deskripsi', 'harga', 'image'];
}
