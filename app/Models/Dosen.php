<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nik', 'nama', 'bidang', 'status'];
    protected $table = 'dosen';
    public $timestamps = false;
}
