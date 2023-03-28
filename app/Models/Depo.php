<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depo extends Model
{
    use HasFactory;
    protected $table = "depo";
    protected $primaryKey = "no_resi";
    public $timestamps = false;
    protected $fillable = [
        'no_resi',
        'tanggal_berangkat',
        'no_transaksi',
        'nama_penerima',
        'nama_pengirim',
        'jenis_barang',
        'no_container'
    ];
    protected $keyType = 'string';
}
