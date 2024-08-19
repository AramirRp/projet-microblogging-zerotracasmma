<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    public function run()
    {
        // Crée 50 utilisateurs fictifs
        User::factory()->count(50)->create();
    }
}