<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FilterType>
 */
class FilterTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fil_type_title'=>fake()->name(),
            'fil_type_btn'=>fake()->firstNameMale(),
            'fil_type_creator'=>1,
            'fil_type_slug'=>'fil_t-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ];
    }
}
