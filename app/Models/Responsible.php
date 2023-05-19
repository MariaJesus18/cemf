<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsible extends Model
{
    use HasFactory;

    protected $table="responsibles";

    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
        return $this->belongsTo(User::class, 'creatoruser_id');
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'editoruser_id');
    }
    

    protected $fillable=[
        'name',
       // 'studend_id',
        'cnpj',
        'observation',
        'creatoruser_id',
        'editoruser_id',
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
