<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentTest extends Model
{
    use HasFactory;

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }

    public function testQuestion()
    {
        return $this->hasMany(TestQuestion::class, 'content_test_id', 'id');
    }
}
