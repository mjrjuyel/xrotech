<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactUs;
use carbon\carbon;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactUs::create([
            'cu_number1'=>'+31 687 857 915',
            'cu_email1'=>'info.tekseer@gmail.com',
            'cu_address1'=>'Amsterdam (the Netherlands)',
            'cu_address2'=>'Jaipur (India)',
            'cu_editor'=>1,
            'created_at'=>carbon::now(),
        ]);
    }
}
