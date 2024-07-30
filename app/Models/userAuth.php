<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAuth extends Model
{
    use HasFactory;

    public $table = '_user__form__auth';

    protected $fillable = [
        'fullname',
        'userStatus',
        'specialization',
        'subspeciality',
        'university',
        'graduationDate',
        'rate',
        'systemUsage',
        'systemUsageTraining',
        'file_paths',
    ];

    
}
