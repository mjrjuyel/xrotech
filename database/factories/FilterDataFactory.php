<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FilterData>
 */
class FilterDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fil_title'=>fake()->name(),
            'fil_detail'=>fake()->sentence(),
            'fil_creator'=>1,
            'fil_cat'=>rand(1,6),
            'fil_slug'=>'fil-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
