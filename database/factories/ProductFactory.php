<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            //
            'cat_id' => 1,
             'name' => $this->faker->name(), 
             'slug' => $this->faker->slug, 
             'size' => 0, 
             'image1' => 'images/product-images/home15-product5-1.jpg',
             'image2' => 'images/product-images/home15-product5.jpg',
             'price' => rand(500,20000),
             'priceReduction' => rand(500,20000),
             'stock' => 10,
             'status' => $this->faker->boolean, 
             'description_' => $this->faker->paragraph(),
        ];
    }
}
