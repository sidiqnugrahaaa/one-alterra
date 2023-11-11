<?php

namespace Database\Seeders;

use App\Models\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlueprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blueprint = [
            [
                'course_id' => 1,
                'title' => 'Persiapan Kelas',
                'order' => 1,
            ],
            [
                'course_id' => 1,
                'title' => 'Minggu Ke-1',
                'order' => 2,
            ],
            [
                'course_id' => 1,
                'title' => 'Minggu Ke-2',
                'order' => 3,
            ],
            [
                'course_id' => 1,
                'title' => 'Minggu Ke-3',
                'order' => 4,
            ],
            [
                'course_id' => 1,
                'title' => 'Minggu Ke-4',
                'order' => 5,
            ],
            [
                'course_id' => 1,
                'title' => 'Project',
                'order' => 6,
            ],
        ];

        Blueprint::insert($blueprint);
    }
}
