<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Covenant extends Model
{
    use HasFactory;

    protected $table = "covenants";

    protected $fillable = [
        'name',
        'discount',
    ];
}
