<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(3, true),
            'likes_count' => $this->faker->numberBetween(0, 1000),
            'tag' => $this->faker->word,
            'comments' => $this->faker->sentence,
            'mediaUrl' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
        ];
    }

    /**
     * Indicate that the post is popular.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function popular()
    {
        return $this->state(function (array $attributes) {
            return [
                'likes_count' => $this->faker->numberBetween(100, 1000),
            ];
        });
    }

    /**
     * Indicate that the post has no media.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withoutMedia()
    {
        return $this->state(function (array $attributes) {
            return [
                'mediaUrl' => null,
            ];
        });
    }
}