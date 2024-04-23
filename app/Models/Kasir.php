<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasirs';
    protected $primaryKey = 'id_kasir';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [''];
}
