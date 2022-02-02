<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "phone" => "12345678",
            "address" => "Santa Ana",
            "role" => "admin",
            'password' => bcrypt('12345678'),
        ]);

        User::factory(100)->create();
    }
}
