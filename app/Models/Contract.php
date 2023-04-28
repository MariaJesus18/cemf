<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contract extends Model
{
    use HasFactory;


    /**
     * Get the user that owns the Contract
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function modalitie(): BelongsTo
    {
        return $this->belongsTo(Modalities::class);
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

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
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
        'modalitiy_id',
        'unit_id',
        'covenant_id',
        'value',
        'school_id',
        'firstpaymentdate',
        'responsiblepayment_id',
        'shift_id',
        'serie_id',
        // 'subscription_id',
        'formpayment_id',
        'subject_id',
        'creatoruser_id',
        'editoruser_id',
    ];
}
