<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schedule::factory()->count(7)->create();
        \DB::table('schedules')->insert([
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'going_out' => 'あり',
                'dinner' => '必要',
                'departure_time' => '10:00',
                'arrival_time' => '11:00',
                'memo' => '今日は天気がいいのでピクニックへ行きます。',
                'user_id' => 1
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'going_out' => 'なし',
                'dinner' => '不要',
                'departure_time' => '8:00',
                'arrival_time' => '19:00',
                'memo' => '今日は友達の家に泊まりに行くので、家に帰りません。',
                'user_id' => 2
            ],
            // [
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => null,
            //     'going_out' => 'あり',
            //     'dinner' => '不要',
            //     'departure_time' => '11:00',
            //     'arrival_time' => '21:00',
            //     'memo' => '今日はバスケをしに行くので、お風呂を沸かしてくれていると助かります。',
            // ],
            // [
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => null,
            //     'going_out' => 'なし',
            //     'dinner' => '必要',
            //     'departure_time' => '10:00',
            //     'arrival_time' => '11:00',
            //     'memo' => '今日は家で麻雀をしています。',
            // ],
        ]);
    }
}
