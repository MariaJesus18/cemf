<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class StudentAttachments extends Model
{
    use HasFactory;

    public $table = 'students_attachments';

    protected $fillable = [
        'student',
        'title',
        'creatoruser_id',
    ];

    public function student(): HasMany
    {
        return $this->hasMany(Student::class, 'student');
    }
}
