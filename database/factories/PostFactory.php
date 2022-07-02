<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Post ;

class PostFactory extends Factory
{
    // Determine The Model For The Factory
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Post Category Array
        $category = ['Economic' , 'Political' , 'Sport'] ;
        return [
            'title' => $this->faker->realText(50) ,
            'body' => $this->faker->realtext(255) ,
            'category' => $category[rand(0,2)],
        ];
    }
}
