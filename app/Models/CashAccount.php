<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAccount extends Model
{
    use HasFactory;
    protected $fillable=[
        'bankCode',
        'bankName',
        'agency',
        'checkingAccount',
        'typecc',
       
    ];
}
