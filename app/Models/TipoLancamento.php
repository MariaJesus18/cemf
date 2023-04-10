<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLancamento extends Model
{
    use HasFactory;

    protected $table = "tipo_lancamentos";

    protected $fillable = [
        'titulo',
    ];
}
