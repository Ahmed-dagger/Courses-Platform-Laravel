<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'owner_id',
        'name',
        'price',
        'CoursesDate',
        'courseType',
        'courseLocation',
        'courseLevel',
        'courseLanguage',
    ];
    public function owner()
{
    return $this->belongsTo(Owner::class);
}
    use HasFactory;
}
