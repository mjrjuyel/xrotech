<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use carbon\carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactMessage>
 */
class ContactMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cm_name'=>fake()->title($gender = 'male'|'female'),
            'cm_email'=>fake()->email(),
            'cm_phone'=>fake()->phoneNumber(),
            'cm_subject'=>fake()->company(),
            'cm_message'=>fake()->text($maxNbChars = 200),
            'cm_slug'=>'cm-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
