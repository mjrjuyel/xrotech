<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use carbon\carbon;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'port_title'=>"WE WORK TO INNOVATE & ARE PROUD OF WHAT WE'VE CREATED.",
            'port_sub_1'=>'OUR PORTFOLIO - BREAKTHROUGH PROJECTS',
            'port_sub_2'=>'YOU’LL LOVE TO SEE SOME OF OUR BEST PROJECTS. TAKE A LOOK!',
            'port_creator'=>1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
