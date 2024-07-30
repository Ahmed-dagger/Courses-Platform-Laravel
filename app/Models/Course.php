<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'price',
        'CoursesDate',
        'courseType',
        'courseLocation',
        'courseLevel',
        'courseLanguage',
    ];
    use HasFactory;
}