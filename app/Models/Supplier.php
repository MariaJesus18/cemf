<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract',
        'typeHolder',
        'name',
        'cpf',
        'cnpj',
        'phone1',
        'phone2',
        'email',
        'cep',
        'street',
        'number',
        'neighborhood',
        'complement',
        'city',
        'uf',
        'observation',
        'id_creatorUser',
        'id_userChange',
        'dateCreated',
        'changeDate',
        'status',
    ];

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class, 'contract');
    }
    public function userCreator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_creatorUse');
    }

    public function userChange(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_userChange');
    }
}
