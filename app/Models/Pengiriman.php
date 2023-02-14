<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = "pengiriman";
    protected $primaryKey = "no";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'nama_kurir',
        'no_transaksi',
        'tanggal_pengiriman',
        'status_barang',
        'link_foto'
    ];
    protected $keyType = 'string';
}
