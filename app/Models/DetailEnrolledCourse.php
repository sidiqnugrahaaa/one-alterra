<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailEnrolledCourse extends Model
{
    use HasFactory;

    public function enrolledCourse()
    {
        return $this->belongsTo(EnrolledCourse::class, 'enrolled_course_id', 'id');
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }

    public function taskTaken()
    {
        return $this->hasOne(TaskTaken::class, 'detail_enrolled_course_id', 'id');
    }

    public function testTaken()
    {
        return $this->hasMany(TestTaken::class, 'detail_enrolled_course_id', 'id');
    }

    public function testScore()
    {
        return $this->hasMany(TestTaken::class, 'detail_enrolled_course_id')
            ->selectRaw('detail_enrolled_course_id, sum(score) as total_score')
            ->groupBy('detail_enrolled_course_id');
    }
}
