<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Covenant extends Model
{
    use HasFactory;

    protected $table = "covenants";

    /**
     * Get the user that owns the Covenant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contrato(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }

    protected $fillable = [
        'name',
        'discount',
        'contract_id'
    ];
}
