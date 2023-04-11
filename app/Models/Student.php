<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'responsible', 
        'cpf',
        'phone1',
        'phone2',
        'cep',
        'street',
        'number',
        'neighborhood',
        'complement',
        'city',
        'state',
        'observation',
        'id_creatorUser',
        'id_userChange',
        'dateCreated',
        'changeDate',
        'status',
    ];

    public function contract(): BelongsToMany
    {
        return $this->belongsToMany(Contract::class);
    }
    public function logBook(): HasMany
    {
        return $this->hasMany(Logbook::class);
    }
    public function responsible(): HasMany
    {
        return $this->hasMany(Responsible::class);
    }
}
