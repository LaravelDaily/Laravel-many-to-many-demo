<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 10)->create();
        factory(Article::class, 10)->create()->each(function ($article) {
            $article->tags()->attach([rand(1,10), rand(1,10)]);
        });
    }
}
