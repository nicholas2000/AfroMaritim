<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelpegawai extends Model
{
    use HasFactory;
    protected $table = "master_tpegawai";
    protected $primaryKey = "id_pegawai";
    public $timestamps = false;
    protected $fillable = [
        'id_pegawai',
        'id_cabang',
        'nama_pegawai',
        'npwp_pegawai',
        'alamat_pegawai',
        'provinsi_pegawai',
        'kota_pegawai',
        'kodepos_pegawai',
        'nohp_pegawai',
        'telp_pegawai',
        'email_pegawai',
        'role_pegawai'
    ];
    protected $keyType = 'string';
}
