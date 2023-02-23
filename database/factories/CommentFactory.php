<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;
    public function definition()
    {
        $notable = [
            \App\Models\Image::class,
            \App\Models\Video::class
        ];
        return [
            'body' => $this->faker->unique()->realText(40),
            'commentable_id' => $this->faker->unique(true)->numberBetween(1,12),
            'commentable_type'=> $this->faker->randomElement($notable)
        ];
    }
}
