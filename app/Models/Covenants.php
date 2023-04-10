<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covenants extends Model
{
    use HasFactory;

    protected $table = "covenants";


    protected $fillable = [
        'nome',
        'desconto',
    ];
}
