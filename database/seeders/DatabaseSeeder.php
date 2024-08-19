<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            PostSeeder::class,
        ]);
=======
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);

>>>>>>> bcedfec04e8e64a693057a8d342e610b12dd9133
    }
}