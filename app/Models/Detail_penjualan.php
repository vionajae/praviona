<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_penjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualans';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [''];
}
