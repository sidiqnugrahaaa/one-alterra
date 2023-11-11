<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Online Class',
                'description' => 'Raih karir impianmu sebagai Software Engineer tanpa merasa khawatir soal biaya. Bayar biaya program setelah dapat kerja!',
                'slug' => 'online-class',
                'thumbnail' => 'https://storage.googleapis.com/binaracademy-assets/programs/online-class.png',
                'link' => 'https://binar.co.id/online-class',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Flexi Program',
                'description' => 'Lengkapi keahlihan kamu sebagai Mahasiswa agar siap menjadi Talenta Digital berkualitas yang #SesuaiDemand Industri setelah lulus.',
                'slug' => 'flexi-program',
                'thumbnail' => 'https://storage.googleapis.com/binaracademy-assets/programs/flexi-program.png',
                'link' => 'https://binar.co.id/flexi-program',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kampus Merdeka',
                'description' => 'Lengkapi keahlihan kamu sebagai Mahasiswa agar siap menjadi Talenta Digital berkualitas yang #SesuaiDemand Industri setelah lulus.',
                'slug' => 'kampus-merdeka',
                'thumbnail' => 'https://storage.googleapis.com/binaracademy-assets/programs/kampus-merdeka.png',
                'link' => 'https://binar.co.id/kampus-merdeka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Program::insert($programs);
    }
}
