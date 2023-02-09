<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelJenisHarga extends Model
{
    use HasFactory;
    protected $table = "master_tjenis";
    protected $primaryKey = "tipe";
    public $timestamps = false;
    protected $fillable = [
        'tipe',
        'jenis_harga',
        'nominal'
    ];
    protected $keyType = 'string';
}
