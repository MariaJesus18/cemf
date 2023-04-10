<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipe extends Model
{
    use HasFactory;

    public function unidade(): BelongsTo
    {
        return $this->belongsTo(Unidade::class, 'id_Unidade');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_Usuario ');
    }

    protected $fillable = [
        'unidade_id',
        'usuario_id',
    ];
}
