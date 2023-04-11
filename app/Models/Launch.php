<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    use HasFactory;

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
        'histórico',
        'installment',
        'status',
        'id_creatorUser',
        'id_userChange',
        'dateCreated',
        'changeDate',
    ];
}
