<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insert([
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'post_id' => 1,
                'comment' => 'コメントダミーです。ダミーコメントだよ。',
                'user_id' => 13,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'post_id' => 2,
                'comment' => 'ダミーコメントだよ。コメントダミーです。',
                'user_id' => 12,
            ],
        ]);
    }
}
