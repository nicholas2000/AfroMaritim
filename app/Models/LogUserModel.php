<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogUserModel extends Model
{
    use HasFactory;
    protected $table = "loguser";
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'berita',
        'status',
        'created_at',
        'update_at'
    ];
    protected $keyType = 'string';
}
