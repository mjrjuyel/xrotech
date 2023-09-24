<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ser_title'=>fake()->sentence($nbWords = 3, $variableNbWords = true),
            'ser_icon'=>'flaticon-predictive-chart', 
            'ser_elem1'=>fake()->catchPhrase(), 
            'ser_elem2'=>fake()->catchPhrase(), 
            'ser_elem3'=>fake()->catchPhrase(), 
            'ser_slug'=>'ser-'.uniqId(),
            'ser_creator'=>1,
            'created_at'=>carbon::now(),
        ];
    }
}
