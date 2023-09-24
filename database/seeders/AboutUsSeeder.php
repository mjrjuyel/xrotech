<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;
use carbon\carbon;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::create([
            'about_title'=> 'Mission Is To Bring The Power Of ML To Every Business',
            'about_subtitle'=> 'About Us',
            'about_description'=> 'We are a growing global AI based IT consulting platform on our way to becoming a leading digital transformation winner. We are here to provide a fulfilling and high-quality solutions for our customers.

            Working with us gives companies a competitive advantage. Let us be your competitive advantage too!
            
            Tekseer is a new breed of AI based technology company providing end-to-end digital transformation services across tech enablement, integration, and development together with strategy and consulting. We help enterprises in building their robust solutions with diverse programming language, data science and AI. Whether it is a consumer-oriented app or a transformative enterprise-class solution, the company leads the process from ideation and concept to delivery. Our mission is to support our clients in accelerating adoption of new technologies, untangle complex issues, emerge digital evolution, and orchestrate ongoing innovation. We are a team with deep industry expertise, consolidating a business vision and technical skillfulness to elevate your growth and provide your business a competitive advantage.',
            'about_elem1'=> 'Advance Advisory Team',
            'about_elem2'=> 'Experienced Software Developers',
            'about_elem3'=> 'Customer Centric',
            'about_elem4'=> 'High-Quality Solution',
            'about_slug'=>'about-'.uniqId(),
            'about_editor'=> 1,
            'created_at'=> carbon::now(),
        ]);
    }
}
