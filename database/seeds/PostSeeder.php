<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        for($i = 0; $i < 5; $i++){
            $post = new Post;
            $post->title = $faker->text(50);
            $post->slug = Str::slug($post->title, '-');
            $post->content = $faker->paragraph(3, true);
            $post->image = $faker->imageUrl(200, 200);
            $post->save();
        }
    }
}
