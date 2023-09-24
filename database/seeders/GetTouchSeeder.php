<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GetTouch;
use carbon\carbon;

class GetTouchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       GetTouch::create([
        'get_title'=>'Are you Ready for a Better, more Productive Business?',
        'get_sub'=>'GET IN TOUCH',
        'get_creator'=>1,
        'created_at'=>carbon::now()->toDateTimeString(),
       ]);
    }
}
