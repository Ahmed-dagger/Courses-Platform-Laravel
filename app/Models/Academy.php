<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    public $table = 'academys';
    protected $fillable = [
        'academy_name',
        'academy_type'
    ];
    use HasFactory;
}
