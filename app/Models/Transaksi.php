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
    protected $primaryKey = "nomor_resi";
    public $timestamps = true;
    protected $fillable = [
        'nomor_manifest',
        'nomor_resi',
        'nomor_container',
        'nomor_segel',
        'nama_pengirim',
        'alamat_pengirim',
        'nohp_pengirim',
        'email_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'nohp_penerima',
        'email_penerima',
        'jenis_barang',
        'jumlah_barang',
        'jenis_volume',
        'berat',
        'volume',
        'rute',
        'nama_kapal',
        'jenis_harga',
        'harga_kubik',
        'harga',
        'harga_tambahan',
        'harga_potongan',
        'total_harga',
        'tanggal',
        'link_foto',
        'catatan',
        'kurir',
        'status_barang'
    ];
    protected $keyType = 'string';

    public function Customer()
    {
        return $this->belongsTo(Customer::class,'id_customer','id_customer');
    }

}
