<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logbook extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    
    protected $fillable = [
        'student',
        'title',
        'observation',
        'creatoruser_id',
        
    ];

    public function Student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student');
    }
}
