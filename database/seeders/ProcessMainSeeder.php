<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcessMain;
use carbon\carbon;

class ProcessMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProcessMain::create([
            'pro_main_title'=>'AI-Driven Software Development Process',
            'pro_main_subtitle'=>'Process',
            'pro_main_creator'=>1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
