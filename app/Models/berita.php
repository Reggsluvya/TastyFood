<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = [
        'judul', 'gambar', 'berita',
    ];

    use HasFactory;
}
