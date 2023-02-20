<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "transaksi";
    protected $primaryKey = "nomor_transaksi";
    public $timestamps = true;
    protected $fillable = [
        'nomor_transaksi',
        'nomor_segel',
        'nama_pengirim',
        'alamat_pengirim',
        'nohp_pengirim',
        'email_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'nohp_penerima',
        'email_penerima',
        'nama_barang',
        'jenis_ukuran',
        'nominal_ukuran',
        'rute',
        'nama_kapal',
        'nomor_resi',
        'jenis_harga',
        'harga_kubik',
        'harga',
        'tambahan_harga',
        'potongan_harga',
        'total_harga',
        'tanggal',
        'nomor_container',
        'nomor_manifest',
        'link_foto',
    ];
    protected $keyType = 'string';

    public function Customer()
    {
        return $this->belongsTo(Customer::class,'id_customer','id_customer');
    }
}
