<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blueprint;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // WithoutModelEvents::disable();

        $this->call([
            ProgramSeeder::class,
            CourseSeeder::class,
            BlueprintSeeder::class,
            SyllabusSeeder::class,
            ContentSeeder::class,
        ]);
    }
}
