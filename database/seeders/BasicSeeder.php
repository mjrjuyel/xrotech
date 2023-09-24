<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Basic;
use carbon\carbon;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Basic::create([
            'basic_description'=>'Tekseer is an AI based software development company providing end-to-end digital transformation services to diverse ventures. We help enterprises in building their robust solutions with diverse programming language, data science and AI.',
            'basic_creator'=>1,
            'basic_copy'=>'Copyright ©2022 Takseer Software Solutions.',
            'basic_slug'=>'basic-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
