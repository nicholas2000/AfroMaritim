<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modelpegawai extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_tpegawai";
    protected $primaryKey = "id_pegawai";
    public $timestamps = true;
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
        'password_pegawai',
        'role_pegawai'
    ];
    protected $keyType = 'string';
}
