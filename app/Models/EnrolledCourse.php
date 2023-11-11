<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledCourse extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function detailEnrolledCourses()
    {
        return $this->hasMany(DetailEnrolledCourse::class, 'enrolled_course_id', 'id');
    }

    public function currentCourse()
    {
        return $this->belongsTo(DetailEnrolledCourse::class, 'current_content_id', 'id');
    }
}
