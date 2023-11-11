<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function syllabus()
    {
        return $this->belongsTo(Syllabus::class, 'syllabus_id', 'id');
    }

    public function contentText()
    {
        return $this->hasOne(ContentText::class, 'content_id', 'id');
    }

    public function contentVideo()
    {
        return $this->hasOne(ContentVideo::class, 'content_id', 'id');
    }

    public function contentSlide()
    {
        return $this->hasOne(ContentSlide::class, 'content_id', 'id');
    }

    public function contentTask()
    {
        return $this->hasOne(ContentTask::class, 'content_id', 'id');
    }

    public function contentTest()
    {
        return $this->hasOne(ContentTest::class, 'content_id', 'id');
    }


    public function contentPracticum()
    {
        return $this->hasOne(ContentPracticum::class, 'content_id', 'id');
    }

    public function testQuestion()
    {
        return $this->hasMany(TestQuestion::class, 'content_id', 'id');
    }
}
