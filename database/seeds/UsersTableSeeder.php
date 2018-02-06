<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->truncate();
        User::create([
            'name' => 'Dang Dung',
            'email' =>'dangdungcntt@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
