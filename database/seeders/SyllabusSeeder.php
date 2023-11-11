<?php

namespace Database\Seeders;

use App\Models\Syllabus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $syllabus = [
            [
                'blueprint_id' => 1,
                'title' => 'Persiapan Kelas',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 2,
                'title' => 'Introduction UI UX Designer',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 2,
                'title' => 'Design Process Framework',
                'order' => 2,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 2,
                'title' => 'User Persona',
                'order' => 3,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 3,
                'title' => 'Affinity Diagram',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 3,
                'title' => 'User Flow',
                'order' => 2,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 3,
                'title' => 'Information Architecture',
                'order' => 3,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 3,
                'title' => 'Design Competence',
                'order' => 4,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 4,
                'title' => 'Interface Structure',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'blueprint_id' => 5,
                'title' => 'Design System',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 6,
                'title' => 'Mini Project Becoming Professional UI/UX Designer',
                'order' => 1,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blueprint_id' => 6,
                'title' => 'Capstone Project Becoming Professional UI/UX Designer',
                'order' => 2,
                'is_locked' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Syllabus::insert($syllabus);
    }
}
