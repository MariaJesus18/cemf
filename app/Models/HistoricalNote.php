<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoricalNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract',
        'student',
        'school',
        'series',
        'period',
        'year',
        'subject',
        'note',
        'id_userCreator',
        'creationDate',
    ];

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class, 'contract');
    }
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student');
    }
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school');
    }
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class, 'series');
    }
    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class, 'period');
    }
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject');
    }
    public function userCreator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_userCreator');
    }
}
