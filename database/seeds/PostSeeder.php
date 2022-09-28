<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $category_ids = Category::pluck('id')->toArray();

        for($i = 0; $i < 5; $i++){
            $post = new Post;
            $post->title = $faker->text(50);
            $post->category_id = Arr::random($category_ids);
            $post->slug = Str::slug($post->title, '-');
            $post->content = $faker->paragraph(3, true);
            $post->image = $faker->imageUrl(200, 200);
            $post->save();
        }
    }
}
