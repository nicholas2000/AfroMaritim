<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = "master_tcabang";
    protected $primaryKey = "id_cabang";
    public $timestamps = true;
    protected $fillable = [
        'id_cabang',
        'nama_cabang',
        'jum_cabang',
        'alamat_cabang',
        'provinsi_cabang',
        'kota_cabang',
        'kodepos_cabang',
        'telpon_cabang',
        'gmaps_cabang',
        'email_cabang',
        'status_cabang'
    ];
    protected $keyType = 'string';
}
