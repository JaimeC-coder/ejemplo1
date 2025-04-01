<?php

namespace Database\Factories;

use App\Models\category;
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
    public function definition(): array
    {
        /**
         *  $table->string('prodName');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id');
         */


        return [
            //
            'prodName' => fake()->name(),
            'price' => fake()->randomFloat(2, 1, 100),
            'category_id' => category::factory()

        ];
    }
}
