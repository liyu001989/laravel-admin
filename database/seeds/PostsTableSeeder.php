<?php

use Illuminate\Database\Seeder;
use AdminDemo\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class)->times(100)->make();
        Post::insert($posts->toArray());
    }
}
