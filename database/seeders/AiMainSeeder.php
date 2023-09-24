<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AiMain;
use carbon\carbon;
use Auth;

class AiMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AiMain::create([
            'ai_main_title'=>'Benefits for Your Business',
            'ai_main_subtitle'=>'AI Services Implementation',
            'ai_main_creator'=>1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
