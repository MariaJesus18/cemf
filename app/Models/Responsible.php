<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Responsible extends Model
{
    use HasFactory;

    protected $table="responsibles";

    /**
     * Get the user that owns the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studend(): BelongsTo
    {
        return $this->belongsTo(Studend::class);
    }
    public function creatoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable=[
        'name',
       // 'studend_id',
        'cnpj',
       
        'observation',
        // 'creatoruser_id',
        // 'editoruser_id',
        'cpf',  
        'telephone1',  
        'telephone2',  
        'road',  
        'number',  
        'neighborhood',  
        'complement',  
        'city',  
        'state',
        'relative',
        'invoicing',
        'email',
        'cep',
    ];

}
