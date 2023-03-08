<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //userのダミーデータを作成
        User::create(['name' => 'test1', 'email' => 'test1@test','password' => bcrypt('test'),]);
    }
}
