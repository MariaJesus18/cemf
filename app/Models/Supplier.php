<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'typeHolder',
        'name',
        'cpf',
        'cnpj',
        'telephone1',
        'telephone2',
        'email',
        'cep',
        'road',
        'number',
        'neighborhood',
        'complement',
        'city',
        'uf',
        'observation',
        'status'
    ];

    public function contract_id(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
    public function creatoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
