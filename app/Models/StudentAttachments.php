<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class StudentAttachments extends Model
{
    use HasFactory;
    protected $fillable=[
        'student',
        'title',
        'file',
        'dateInclusion',
        'id_userCreator',
    ];
    
    public function student(): HasMany
    {
        return $this->hasMany(Student::class, 'student');
    }

}
