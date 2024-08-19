<?php
<<<<<<< HEAD
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
=======

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

>>>>>>> bcedfec04e8e64a693057a8d342e610b12dd9133
class UserSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        // Crée 50 utilisateurs fictifs
        User::factory()->count(50)->create();
=======
        User::factory()->count(50)->create();

>>>>>>> bcedfec04e8e64a693057a8d342e610b12dd9133
    }
}