<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;
use carbon\carbon;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'ban_title'=>'Accelerate Business Growth With Custom AI-Powered Solutions',
            'ban_btn'=>'Get Started',
            'ban_slug'=>'ban-'.uniqId(),
            'ban_editor'=>1,
            'created_at'=>carbon::now(),
        ]);
    }
}
