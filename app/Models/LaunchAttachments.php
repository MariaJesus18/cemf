<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class LaunchAttachments extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'launch',
        'title',
        'file',
        'creatoruser_id',
    ];

    public function launch(): HasMany
    {
        return $this->hasMany(Launch::class, 'launch');
    }
}
