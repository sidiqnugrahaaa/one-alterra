<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }

    public function syllabus()
    {
        return $this->hasMany(Syllabus::class, 'blueprint_id', 'id');
    }
}
