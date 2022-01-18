<?php

use Faker\Generator as Faker;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++)
            $_article = new Article();
        $_article->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
        $_article->image = $faker->imageUrl(400, 400);
        $_article->text = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
        $_article->creation_date = $faker->date;
        $_article->votes = $faker->numberBetween(100, 2000);
        $_article->save();
    }
}