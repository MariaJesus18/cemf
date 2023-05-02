<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Unit;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable=[
        'unit_id',
        'user_id',
        
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
