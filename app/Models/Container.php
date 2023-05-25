<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Container extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_tcontainer";
    protected $primaryKey = "nomor_container";
    public $timestamps = true;
    protected $fillable = [
        'nomor_container',
        'tanggal',
        'nama_container',
        'status'
    ];
    protected $keyType = 'string';
}
