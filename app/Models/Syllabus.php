<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    protected $table = 'syllabus';

    public function blueprint()
    {
        return $this->belongsTo(Blueprint::class, 'blueprint_id', 'id');
    }

    public function content()
    {
        return $this->hasMany(Content::class, 'syllabus_id', 'id');
    }
}
