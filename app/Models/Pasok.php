<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    use HasFactory;

    protected $table = 'pasoks';
    protected $primaryKey = 'id_pasok';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [''];
}
