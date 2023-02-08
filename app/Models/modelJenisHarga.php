<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelJenisHarga extends Model
{
    use HasFactory;
    protected $table = "master_tjenis";
    protected $primaryKey = "type";
    public $timestamps = false;
    protected $fillable = [
        'type',
        'jenis_harga',
        'nominal'
    ];
    protected $keyType = 'string';
}
