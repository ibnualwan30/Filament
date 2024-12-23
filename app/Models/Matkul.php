<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'Matkul';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nim',
        'nama',
        'matkul',
    ];

    // Jika Anda ingin menambahkan validasi atau mutator, Anda bisa melakukannya di sini
}