<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Depo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "depo";
    protected $primaryKey = "no_resi";
    public $timestamps = true;
    protected $fillable = [
        'tanggal',
        'no_transaksi',
        'nama_penerima',
        'nama_pengirim',
        'nama_barang',
        'no_resi',
        'no_container'
    ];
    protected $keyType = 'string';
}
