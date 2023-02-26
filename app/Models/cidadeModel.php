<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidadeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'cidade';
    protected $fillable = [
        'nome',
        'estado_id',
    ];
}
