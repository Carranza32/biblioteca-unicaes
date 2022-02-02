<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Editorial;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'language' => $this->faker->languageCode,
            'pages' => $this->faker->numberBetween(50, 300),
            'description' => $this->faker->paragraph,
            'stock' => 1,


            //relaciones
            "author_id" => Author::all()->random()->id,
            "editorial_id" => Editorial::all()->random()->id,
            "category_id" => Category::all()->random()->id,
        ];
    }
}
