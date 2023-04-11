<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostingAttachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'launch',
        'title',
        'file',
        'dateInclusion',
        'id_userCreator',
    ];

    public function launch(): BelongsTo
    {
        return $this->belongsTo(Launch::class, 'launch');
    }
}
