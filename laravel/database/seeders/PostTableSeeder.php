<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $content = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

        // $commentdammy = 'コメントダミーです。ダミーコメントだよ。';

        // for($i=1;$i<=10;$i++) {
        //     $post = new Post;
        //     $post->title = "$i 番目の投稿";
        //     $post->content = $content;
        //     $post->user_id = 14;
        //     $post->save();

        //     $maxComments = mt_rand(3, 15);
        //     for ($j=0;$j<=$maxComments;$j++) {
        //         $comment = new Comment;
        //         $comment->user_id = 12;
        //         $comment->comment = $commentdammy;

        //         $post->comments()->save($comment);
        //         $post->comment_count = Post::find($post_id)->increment('comment_count');
        //     }
        // }

        \DB::table('posts')->insert([
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'title' => '1回目の投稿',
                'content' => 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',
                'user_id' => 12,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'title' => '2回目の投稿',
                'content' => 'ここの文章はダミーだよ。文字の大きさ、量、字間、行間等を確認するために入れているよ。この文章はダミーだよ。文字の大きさ、量、字間、行間等を確認するために入れているよ。この文章はダミーだよ。文字の大きさ、量、字間、行間等を確認するために入れているよ。',
                'user_id' => 14,
            ],
        ]);
    }
}
