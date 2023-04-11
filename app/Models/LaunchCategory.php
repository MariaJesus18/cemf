<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaunchCategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'categoryType',
        // 'categoriapai',
        'title',
    ];
}
