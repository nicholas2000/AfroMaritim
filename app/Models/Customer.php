<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "master_tcustomer";
    protected $primaryKey = "id_customer";
    public $timestamps = false;
    protected $fillable = [
        'id_customer',
        'id_cabang ',
        'nama_customer',
        'npwp',
        'jalan',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'HP',
        'telpon',
        'email',
        'status_hutang',
        'total_hutang',
        'batas_pembayaran',
        'no_rekening',
        'metode_pembayaran'
    ];
    protected $keyType = 'string';
    
}
