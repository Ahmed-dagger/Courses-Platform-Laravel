<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use CrudTrait;

    protected $casts = [
        'video_paths' => 'array', // Automatically cast to and from JSON
    ];
    protected $fillable = [
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
