<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'title' => 'Becoming Professional UI/UX Designer',
            'program_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Courses::insert($courses);
    }
}
