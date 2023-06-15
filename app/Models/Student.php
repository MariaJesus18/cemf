<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'responsible',
        'cpf',
        'telephone1',
        'telephone2',
        'cep',
        'road',
        'number',
        'neighborhood',
        'complement',
        'city',
        'uf',
        'observation',
        'email',
        'creatoruser_id',
        'editoruser_id',
        'status',
    ];

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(Responsible::class);
    }
    public function creatoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function student_attachments(): BelongsTo
    {
        return $this->belongsTo(StudentAttachments::class);
    }
}
