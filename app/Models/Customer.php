<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_tcustomer";
    protected $primaryKey = "id_customer";
    public $timestamps = true;
    protected $fillable = [
        'id_customer',
        'id_cabang',
        'nama_customer',
        'npwp',
        'jalan',
        'provinsi',
        'kode_pos',
        'telpon',
        'email',
        'pajak',
        'status_hutang',
        'total_hutang',
        'batas_pembayaran',
        'no_rekening',
        'metode_pembayaran'
    ];
    protected $keyType = 'string';

}
