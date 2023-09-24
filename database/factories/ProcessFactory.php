<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\process>
 */
class ProcessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'pro_title'=>fake()->name(),
          'pro_elem1'=>fake()->catchPhrase(), 
          'pro_elem2'=>fake()->catchPhrase(), 
          'pro_elem3'=>fake()->catchPhrase(), 
          'pro_elem4'=>fake()->catchPhrase(), 
          'pro_slug'=>'Process'.uniqId(),
          'pro_main'=>1,
          'pro_creator'=>1,
          'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
