<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // kategori tablosunda hangi alanların fake data oluştururken kullanıyoruz
    public function definition(): array
    {
        $title = fake()->name;
        return [
            //
            'name'=>$title,
            'status'=>fake()->boolean,
            'slug_name'=>Str::slug($title),
        ];
    }
}
