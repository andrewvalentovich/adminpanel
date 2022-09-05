<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(7),
            "description" => $this->faker->sentence(10),
            "content" => $this->faker->text(1000),
            "image" => $this->faker->imageUrl,
            "likes" => random_int(0, 5000),
            "is_published" => random_int(0, 1),
            "category_id" => Category::get()->random()->id,
        ];
    }
}
