<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logbook extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'student',
        'title',
        'observation',
        'dateInclusion',
        'id_userCreator',
    ];

    public function Student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student');
    }
}
