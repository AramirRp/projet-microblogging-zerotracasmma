<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        // Crée 50 utilisateurs fictifs
=======
>>>>>>> bcedfec04e8e64a693057a8d342e610b12dd9133
        Post::factory()->count(50)->create();
    }
}