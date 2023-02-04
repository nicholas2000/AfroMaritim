<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $primaryKey = "nomor_transaksi";
    public $timestamps = false;
    protected $fillable = [
        'nomor_transaksi',
        'id_customer',
        'nama_barang',
        'id_admin',
        'ukuran',
        'volume',
        'berat',
        'rute',
        'harga',
        'jenis_harga',
        'tonase',
        'harga_tambahan',
        'persentase',
        'total_harga',
        'nama_kapal',
        'nama_container',
        'tanggal_berangkat'
    ];
    protected $keyType = 'string';
}
