<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Editorial;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        Category::create(["name" => "Terror"]);
        Category::create(["name" => "Biografica"]);
        Category::create(["name" => "Novela"]);

        Author::factory(10)->create();
        Editorial::factory(5)->create();
        Book::factory(100)->create();
    }
}
