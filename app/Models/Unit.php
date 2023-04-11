<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Unit extends Model
{
    use HasFactory;
    protected $table="units";

    /**
     * Get the user that owns the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsible(): BelongsTo
    {
        return $this->belongsTo(Responsible::class);
    }

    protected $fillable=[
        'name',
        'responsible_id',
        'cnpj',
        'observation',
        'cpf',  
        'telephone1',  
        'telephone2',  
        'road',  
        'number',  
        'neighborhood',  
        'complement',  
        'city',  
        'state',

    ];


}

