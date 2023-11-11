<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTaken extends Model
{
    use HasFactory;

    public function detailEnrolledCourse()
    {
        return $this->belongsTo(DetailEnrolledCourse::class, 'detail_enrolled_course_id', 'id');
    }
}
