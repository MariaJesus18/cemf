<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Get the user that owns the Contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function modality(): BelongsTo
    {
        return $this->belongsTo(Modality::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function covenant(): BelongsTo
    {
        return $this->belongsTo(Covenant::class);
    }

    public function responsiblepayment(): BelongsTo
    {
        return $this->belongsTo(Responsible::class);
    }

    public function shift(): BelongsTo
    {
        return $this->belongsTo(Shift::class);
    }

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }

    // public function subscription(): BelongsTo
    // {
    //     return $this->belongsTo(Subscription::class);
    // }


    public function formpayment(): BelongsTo
    {
        return $this->belongsTo(FormPayment::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function creatoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function editoruser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $table = "contracts";

    protected $fillable = [
        'studend_id',
        'modality_id',
        'unit_id',
        'covenant_id',
        'value',
        'discount',
        'school_id',
        'firstpaymentdate',
        'responsible_id',
        'shift_id',
        'serie_id',
        'registrationFee', 
        'formpayment_id',
         
        'observation',
        'status',
        'creatoruser_id',
        'editoruser_id',
    ];
}
