<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $category = 1;
        return [
            //
            // 'name' => fake()->unique()->numerify('Category #'),
            "name"=> 'Category '.$category++,
        ];
    }
}
