<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function ($post){
            Comment::factory(rand(0,5))->create(['post_id' =>$post->id]);
        });

        Comment::all()->each(function($comment) {
            $randomUser = DB::table('users')
                ->inRandomOrder()
                ->first();

            $comment->user_id = $randomUser->id;
        });
    }
}
