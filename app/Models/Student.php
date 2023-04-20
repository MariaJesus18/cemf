<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'responsible',
        'cpf',
        'telephone1',
        'telephone2',
        'cep',
        'road',
        'number',
        'neighborhood',
        'complement',
        'city',
        'state',
        'observation',
        'creatoruser_id',
        'editoruser_id',
        'status',
    ];

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creatoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
