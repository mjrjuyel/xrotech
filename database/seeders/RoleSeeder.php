<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use carbon\carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_title'=>'Super Admin',
            'role_slug'=>'role-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
    }
}
