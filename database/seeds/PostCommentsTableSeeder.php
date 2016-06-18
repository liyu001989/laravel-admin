<?php

use Illuminate\Database\Seeder;
use AdminDemo\Models\PostComment;

class PostCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postComments = factory(PostComment::class)->times(100)->make();
        PostComment::insert($postComments->toArray());
    }
}
