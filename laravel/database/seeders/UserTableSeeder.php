<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '山田太郎',
                'email' => 'yamadataro@gmail.com',
                'password' => 'Taro07220'
            ],
            [
                'name' => '山田花子',
                'email' => 'yamadahanako@gmail.com',
                'password' => 'Hanako05110'
            ],
        ]);
    }
}
