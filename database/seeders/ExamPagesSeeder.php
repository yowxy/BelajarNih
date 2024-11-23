<?php

namespace Database\Seeders;

use App\Models\Clases;
use App\Models\ExamPages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class = Clases::first(); // Ambil kelas pertama dari tabel clases
        //
        if ($class) {
            ExamPages::create([
                'user_id' => 1,  // Pastikan ID user yang valid
                'clases_id' => $class->id,  // Ambil ID kelas yang valid
                'title' => 'Judul Ujian',
                'question_text' => 'Apa itu Laravel?',
                'correct_answer' => 'Framework PHP',
                'is_correct' => true,
                'score' => 100,
            ]);
        } else {
            echo "Tidak ada kelas yang ditemukan. Pastikan data kelas sudah ada di database.\n";
        }
    }
}
