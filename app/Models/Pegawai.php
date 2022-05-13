<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\http\Controllers\PegawaiController;
class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawais";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama', 'alamat', 'no_telp', 'jabatan'];
} 
