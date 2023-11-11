<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Courses::class, 'program_id', 'id');
    }
}
