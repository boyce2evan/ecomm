<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
