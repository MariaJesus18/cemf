<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class StudentAttachments extends Model
{
    use HasFactory;

    public $table = 'students_attachments';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'student',
        'title',
        'file',
        'creatoruser_id',
    ];

    public function student(): HasMany
    {
        return $this->hasMany(Student::class, 'student');
    }
}
