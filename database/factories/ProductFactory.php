<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class ProductFactory extends Factory
{

    protected $model=\App\Models\Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this->faker->text(60),
            'description' =>$this->faker->paragraph(),
            'price' => $this->faker->numberBetween(10, 9000),
            'manage_stock' => false,
            'in_stock' => $this->faker->boolean(),
            'slug' => $this->faker->slug(),
            'sku' =>$this->faker->word(),
            'is_active' => $this->faker->boolean(),

        ];
    }
}
