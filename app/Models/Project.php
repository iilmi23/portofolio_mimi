<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $table = 'projects'; // pastikan nama tabel sesuai di database
    protected $fillable = [
        'nama_projek',
        'deskripsi',
        'screenshot'
    ];
}
