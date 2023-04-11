<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContractDiscipline extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the ContractDiscipline
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }


    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    protected $table ="contract_disciplines";

    protected $fillable =[
        'contract_id',
        'subject_id',
    ];


}
