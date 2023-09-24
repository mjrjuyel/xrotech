<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ai>
 */
class AiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ai_title'=>fake()->catchPhrase,
            'ai_main'=>1,
            'ai_slug'=>'ai-'.uniqId(),
            'ai_creator'=>1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
