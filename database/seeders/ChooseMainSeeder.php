<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChooseMain;
use carbon\carbon;

class ChooseMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChooseMain::create([
            'cho_main_title'=>'Our Platform Takes Away The Hard Process Of Creating Your Solution',
            'cho_main_subtitle'=>'Why Choose Us',
            'cho_main_creator'=>1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
