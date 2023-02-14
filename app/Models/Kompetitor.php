<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kompetitor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_tkompetitor";
    protected $primaryKey = "id_kompetitor";
    public $timestamps = true;
    protected $fillable = [
        'id_kompetitor',
        'nama_kompetitor',
        'npwp_kompetitor',
        'alamat_kompetitor',
        'provinsi_kompetitor',
        'kodepos_kompetitor',
        'telp_kompetitor',
        'email_kompetitor',
        'rute_kompetitor',
        'namabank_kompetitor',
        'norek_kompetitor'
    ];
    protected $keyType = 'string';
}
