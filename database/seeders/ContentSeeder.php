<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentPracticum;
use App\Models\ContentSlide;
use App\Models\ContentTask;
use App\Models\ContentTest;
use App\Models\ContentText;
use App\Models\ContentVideo;
use App\Models\TestQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Persiapan Kelas
        $content = [[
            'syllabus_id' => 1,
            'title' => 'Persiapan Kelas Becoming Professional UI/UX Designer',
            'order' => 1,
            'type' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        Content::insert($content);

        $contentText = [[
            'content_id' => 1,
            'content_value' => '<div>
            <h5 class="font-semibold my-4">Spesifikasi Laptop</h5>
            <ol class="list-decimal list-outside ml-6">
                <li>RAM minimal 4GB</li>
                <li>OS: Linux, Windows atau MAC OS X</li>
                <li>Processor: 32/64-bit</li>
                <li>Web browser: Installed professional browser (Google Chrome)</li>
                <li>Code Editor: Installed professional text editor (VS Code)</li>
                <li>Telegram: Installed text messaging for group communication (Telegram);
                </li>
                <li>Video conference: Installed video conference (Zoom);</li>
            </ol>
            <h5 class="font-semibold my-4">Tools yang digunakan</h5>
            <ol class="list-decimal list-outside ml-6">
                <li>Figma</li>
                <li>Visual Studio Code</li>
            </ol>
        </div>
            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        ContentText::insert($contentText);

        // Introduction UI UX Designer
        $content = [
            [
                'syllabus_id' => 2,
                'title' => 'Video - Introduction UI UX Designer',
                'order' => 2,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 2,
                'title' => 'Materi - Introduction UI UX Designer',
                'order' => 3,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 2,
                'title' => 'Soal Pilgan KMUI/UX - Introduction UI UX Designer',
                'order' => 4,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 2,
                'title' => 'Latihan - Introduction UI UX Designer',
                'order' => 5,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 2,
                'title' => 'Resume KMUIX - Introduction UI UX Designer',
                'order' => 6,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        $contentVideo = [
            'content_id' => 2,
            'title' => 'Introduction UI UX Designer',
            'description' => 'Selamat datang dalam video ini yang akan membawa Anda ke dalam dunia menarik User Interface (UI) dan User Experience (UX). Saya Zahra, akan memandu Anda melalui konsep-konsep dasar, prinsip desain, dan pentingnya antarmuka pengguna yang baik. Mari kita mulai petualangan kita dalam memahami bagaimana desain dapat meningkatkan pengalaman pengguna secara keseluruhan.',
            'embed_code' => '<iframe class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/_VNwJx2cKEg?si=FMBQeSFP3UWffA2L"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            ',
        ];

        ContentVideo::insert($contentVideo);

        $contentSlide = [
            'content_id' => 3,
            'title' => 'Introduction UI UX Designer',
            'description' => 'This is description of slide',
            'embed_code' => '<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vT5I0e1LqPsShj-UuQ6_v1vKcbWbzYEttO4xGzHBHvIP8JOcP4IIfxOUKEFHJHl6G3MLSKCqR5YRxHS/embed?start=false&loop=false&delayms=3000"
                frameborder="0" class="w-full aspect-video rounded-xl" allowfullscreen="true" mozallowfullscreen="true"
                webkitallowfullscreen="true"></iframe>',
        ];

        ContentSlide::insert($contentSlide);

        $contentTest = [
            'content_id' => 4,
            'title' => 'Introduction UI UX Designer',
            'description' => 'This is description of test',
        ];

        ContentTest::insert($contentTest);

        $testQuestion = [
            [
                'content_test_id' => 1,
                'question_number' => 1,
                'question' => 'Manakah yang bukan merupakan software yang digunakan dalam UI/UX?',
                'question_image' => null,
                'answer_a' => 'Zeplin',
                'answer_b' => 'React',
                'answer_c' => 'Figma',
                'answer_d' => 'Maze',
                'key_answer_a' => 0,
                'key_answer_b' => 1,
                'key_answer_c' => 0,
                'key_answer_d' => 0,
                'score' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content_test_id' => 1,
                'question_number' => 2,
                'question' => 'Manakah yang bukan merupakan basic rule pada UI/UX?',
                'question_image' => null,
                'answer_a' => 'Memahami User',
                'answer_b' => 'Kejelasan Sistem',
                'answer_c' => 'Menggunakan Teknologi Terbaru',
                'answer_d' => 'Menyerupai Dunia Nyata',
                'key_answer_a' => 0,
                'key_answer_b' => 0,
                'key_answer_c' => 1,
                'key_answer_d' => 0,
                'score' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content_test_id' => 1,
                'question_number' => 3,
                'question' => 'Termasuk manakah gambar berikut?',
                'question_image' => 'https://lh3.googleusercontent.com/drive-viewer/AK7aPaAYQxLxf4j5UiCAGSEkqkYq4aPU4on1zu9eKWnGoBevoptP_RXnMztI_Wm4-ywVZOdw-XsZg65yxOGjtqqjhZzjTP49=s2560',
                'answer_a' => 'Low Fidelity',
                'answer_b' => 'Intermediet Fidelity',
                'answer_c' => 'High Fidelity',
                'answer_d' => 'Medium Fidelity',
                'key_answer_a' => 0,
                'key_answer_b' => 0,
                'key_answer_c' => 1,
                'key_answer_d' => 0,
                'score' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content_test_id' => 1,
                'question_number' => 4,
                'question' => 'Termasuk manakah gambar berikut?',
                'question_image' => 'https://lh3.googleusercontent.com/drive-viewer/AK7aPaD_EbLSyoBksBuS3fhWgOjqzYHfC_Od0VaW3eVE963RHFmUuU9Uv5W_4EIO1__3dcr6YeYWNp0sMiMFlLm3V8f9T4-4OQ=s2560',
                'answer_a' => 'Medium Fidelity',
                'answer_b' => 'Intermediet Fidelity',
                'answer_c' => 'High Fidelity',
                'answer_d' => 'Low Fidelity',
                'key_answer_a' => 0,
                'key_answer_b' => 0,
                'key_answer_c' => 0,
                'key_answer_d' => 1,
                'score' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content_test_id' => 1,
                'question_number' => 5,
                'question' => 'User testing dilakukan di tempat umum merupakan penjelasan dari?',
                'question_image' => null,
                'answer_a' => 'Geurilla User Testing',
                'answer_b' => 'Usability Testing',
                'answer_c' => 'Offline User Testing',
                'answer_d' => 'Online User Testing',
                'key_answer_a' => 1,
                'key_answer_b' => 0,
                'key_answer_c' => 0,
                'key_answer_d' => 0,
                'score' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        TestQuestion::insert($testQuestion);

        ContentTask::insert([
            'content_id' => 5,
            'title' => 'Introduction UI UX Designer',
            'description' => '       <div class="p-0 mb-4">
            <h5 class="text-lg font-bold my-2">🎯 Objective</h5>
            <p>Test pemahaman peserta didik terkait konsep UI UX designer</p>
        </div>

        <div class="p-0 mb-4">
            <h5 class="text-lg font-bold my-2">📝 Task</h5>
            <p class="mb-2 font-semibold">Study Case: Memahami Kebutuhan Pengguna untuk Aplikasi Kesehatan Mental</p>

            <p class="mb-2">Anda adalah seorang UI/UX designer yang sedang bekerja pada proyek pengembangan aplikasi mobile
                untuk
                membantu individu mengelola kesehatan mental mereka. Aplikasi ini bertujuan untuk memberikan dukungan dan
                sumber daya untuk mengatasi stres dan kecemasan. </p>

            <p class="mb-2">Pada tahap awal anda akan diberi tugas Tugas untuk memahami kebutuhan dan harapan pengguna
                potensial untuk
                aplikasi ini. Anda perlu mendekati pengguna dengan cara empatik dan mendalam untuk memahami pengalaman
                mereka terkait kesehatan mental dan apa yang mereka cari dalam sebuah aplikasi.</p>

            <p class="mb-2">Karena topik aplikasi ini berhubungan dengan kesehatan mental dan beberapa pengguna mungkin
                merasa lebih
                nyaman untuk berbicara tentang pengalaman pribadi secara langsung dan lebih rahasia, user testing tatap muka
                akan menjadi pilihan yang lebih baik. Dalam setting tatap muka, Anda dapat menciptakan lingkungan yang aman
                dan terbuka, sehingga pengguna merasa lebih nyaman untuk berbicara tentang perasaan dan pengalaman mereka
                tanpa batasan waktu tertentu.</p>
        </div>

        <div class="p-0 mb-4">
            <h5 class="text-lg font-bold my-2">📚 Soal</h5>
            <ul class="space-y-1 list-disc list-outside ml-4">
                <li>Berada di tahap manakah anda sekarang (jika didasarkan pada tahap design thinking)? Dan jelaskan tujuan
                    dari
                    tahap tersebut.</li>
                <li>Sebutkan beberapa teknik atau metode yang dapat digunakan untuk memahami pengguna ?</li>
                <li>Mengapa penting untuk mendekati pengguna dengan cara yang empatik saat merancang aplikasi untuk
                    kesehatan
                    mental?</li>
                <li> User testing apakah yang paling tepat digunakan jika berdasarkan study case diatas ? jelaskan</li>
            </ul>
        </div>',
        ]);

        ContentPracticum::insert([
            'content_id' => 6,
            'title' => 'Resume - Introduction UI UX Designer',
            'description' => 'Tuliskan minimal 3 poin yang dipelajari dari materi tersebut'
        ]);

        // Design Process Framework
        $content = [
            [
                'syllabus_id' => 3,
                'title' => 'Video - Design Process Framework',
                'order' => 7,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 3,
                'title' => 'Materi - Design Process Framework',
                'order' => 8,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 3,
                'title' => 'Soal Pilgan KMUI/UX - Design Process Framework',
                'order' => 9,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 3,
                'title' => 'Latihan - Design Process Framework',
                'order' => 10,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 3,
                'title' => 'Resume KMUIX - Design Process Framework',
                'order' => 11,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        $contentVideo = [
            'content_id' => 7,
            'title' => 'Video - Design Process Framework',
            'description' => 'Selamat datang dalam video ini yang akan membawa Anda ke dalam dunia menarik User Interface (UI) dan User Experience (UX). Saya Zahra, akan memandu Anda melalui konsep-konsep dasar, prinsip desain, dan pentingnya antarmuka pengguna yang baik. Mari kita mulai petualangan kita dalam memahami bagaimana desain dapat meningkatkan pengalaman pengguna secara keseluruhan.',
            'embed_code' => '<iframe class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/_VNwJx2cKEg?si=FMBQeSFP3UWffA2L"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            ',
        ];

        ContentVideo::insert($contentVideo);

        // User Persona
        $content = [
            [
                'syllabus_id' => 4,
                'title' => 'Video - User Persona',
                'order' => 12,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 4,
                'title' => 'Materi - User Persona',
                'order' => 13,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 4,
                'title' => 'Soal Pilgan KMUI/UX - User Persona',
                'order' => 14,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 4,
                'title' => 'Latihan - User Persona',
                'order' => 15,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 4,
                'title' => 'Resume KMUIX - User Persona',
                'order' => 16,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        // Affinity Diagram
        $content = [
            [
                'syllabus_id' => 5,
                'title' => 'Video - Affinity Diagram',
                'order' => 17,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 5,
                'title' => 'Materi - Affinity Diagram',
                'order' => 18,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 5,
                'title' => 'Soal Pilgan KMUI/UX - Affinity Diagram',
                'order' => 19,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 5,
                'title' => 'Latihan - Affinity Diagram',
                'order' => 20,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 5,
                'title' => 'Resume KMUIX - Affinity Diagram',
                'order' => 21,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        // User Flow
        $content = [
            [
                'syllabus_id' => 6,
                'title' => 'Video - User Flow',
                'order' => 22,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 6,
                'title' => 'Materi - User Flow',
                'order' => 23,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 6,
                'title' => 'Soal Pilgan KMUI/UX - User Flow',
                'order' => 24,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 6,
                'title' => 'Latihan - User Flow',
                'order' => 25,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 6,
                'title' => 'Resume KMUIX - User Flow',
                'order' => 26,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        // Information Architecture

        $content = [
            [
                'syllabus_id' => 7,
                'title' => 'Video - Information Architecture',
                'order' => 27,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 7,
                'title' => 'Materi - Information Architecture',
                'order' => 28,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 7,
                'title' => 'Soal Pilgan KMUI/UX - Information Architecture',
                'order' => 29,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 7,
                'title' => 'Latihan - Information Architecture',
                'order' => 30,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 7,
                'title' => 'Resume KMUIX - Information Architecture',
                'order' => 31,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        // Design Competence

        $content = [
            [
                'syllabus_id' => 8,
                'title' => 'Code Competence UI/UX 1',
                'order' => 32,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Content::insert($content);

        // Interface Structure

        $content = [
            [
                'syllabus_id' => 9,
                'title' => 'Video - Interface Structure',
                'order' => 33,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 9,
                'title' => 'Materi - Interface Structure',
                'order' => 34,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 9,
                'title' => 'Soal Pilgan KMUI/UX - Interface Structure',
                'order' => 35,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 9,
                'title' => 'Latihan - Interface Structure',
                'order' => 36,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 9,
                'title' => 'Resume KMUIX - Interface Structure',
                'order' => 37,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);
        // Design System

        $content = [
            [
                'syllabus_id' => 10,
                'title' => 'Video - Design System',
                'order' => 38,
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 10,
                'title' => 'Materi - Design System',
                'order' => 39,
                'type' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 10,
                'title' => 'Soal Pilgan KMUI/UX - Design System',
                'order' => 40,
                'type' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'syllabus_id' => 10,
                'title' => 'Latihan - Design System',
                'order' => 41,
                'type' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'syllabus_id' => 10,
                'title' => 'Resume KMUIX - Design System',
                'order' => 42,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Content::insert($content);

        // Mini Project Becoming Professional UI/UX Designer
        $content = [
            [
                'syllabus_id' => 11,
                'title' => 'Mini Project Becoming Professional UI/UX Designer',
                'order' => 43,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Content::insert($content);

        // Capstone Project Becoming Professional UI/UX Designer

        $content = [
            [
                'syllabus_id' => 12,
                'title' => 'Capstone Project Becoming Professional UI/UX Designer',
                'order' => 44,
                'type' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Content::insert($content);
    }
}
