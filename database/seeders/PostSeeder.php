<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Créer un utilisateur si nécessaire
        $user = User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => bcrypt('password'),
            ]
        );

        // Créer quelques posts
        $posts = [
            [
                'content' => 'Ceci est un premier post de test.',
                'likes_count' => 10,
                'tag' => 'test',
                'comments' => 'Un commentaire sur le premier post.',
                'mediaUrl' => 'https://example.com/media1.jpg',
            ],
            [
                'content' => 'Voici un deuxième post de test.',
                'likes_count' => 5,
                'tag' => 'exemple',
                'comments' => 'Un commentaire sur le deuxième post.',
                'mediaUrl' => 'https://example.com/media2.jpg',
            ],
            // Ajoutez d'autres posts si nécessaire
        ];

        foreach ($posts as $postData) {
            $user->posts()->create($postData);
        }
    }
}