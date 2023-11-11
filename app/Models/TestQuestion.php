<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
}
