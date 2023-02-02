<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $table = "master_tcabang";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_cabang',
        'jum_cabang',
        'alamat_cabang',
        'provinsi_cabang',
        'kota_cabang',
        'kecamatan_cabang',
        'kelurahan_cabang',
        'kodepos_cabang',
        'gmaps_cabang',
        'email_cabang',
        'status_cabang'
    ];
    protected $keyType = 'string';
}
