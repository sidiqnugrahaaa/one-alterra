<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }

    public function blueprint()
    {
        return $this->hasMany(Blueprint::class, 'course_id', 'id');
    }

    public function enrolledCourse()
    {
        return $this->hasMany(EnrolledCourse::class, 'course_id', 'id');
    }
}
