<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            BasicSeeder::class,
            ContactUsSeeder::class,
            BannerSeeder::class,
            AboutUsSeeder::class,
            ChooseMainSeeder::class,
            AiMainSeeder::class,
            PortfolioSeeder::class,
            ProcessMainSeeder::class,
            GetTouchSeeder::class,
        ]);
        \App\Models\ContactMessage::factory(10)->create();
        \App\Models\Service::factory(6)->create();
        \App\Models\Ai::factory(12)->create();
        // \App\Models\Ai::factory(6)->create();
        \App\Models\FilterType::factory(6)->create();
        \App\Models\FilterData::factory(10)->create();
        \App\Models\Process::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
