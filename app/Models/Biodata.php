<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    /** @use HasFactory<\Database\Factories\BiodataFactory> */
    use HasFactory;

    protected $table = 'biodata';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'tanggal_lahir',
        'usia',
        'foto',
    ];
}
