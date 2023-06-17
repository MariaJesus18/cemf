<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Launch extends Model
{
    use HasFactory;
    protected $table = 'launchs';

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function suppliers(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
    public function cashAccount(): BelongsTo
    {
        return $this->belongsTo(cashAccount::class);
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeRelease::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(LaunchCategory::class);
    }
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(paymentMethod::class);
    }
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    protected $fillable = [
        'contract', 
        'student',
        'supplier',
        'cashAccount',
        'type',
        'category',
        'paymentMethod',
        'expiration',
        'lowDate',
        'originalValue',
        'surcharge',
        'discountType',
        'discount',
        'postingAmount',
        'barcode',
        'historic',
        'installment',
        'status',
        'creatoruser_id',
        'editoruser_id',
        'dateCreated',
        'changeDate',
        'unit',
    ];
}
