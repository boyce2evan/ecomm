<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => "administrator",
            'description' => "Super Privilage",
        ]);
        DB::table('roles')->insert([
            'title' => "editor",
            'description' => null,
        ]);
        DB::table('roles')->insert([
            'title' => "writer",
            'description' => null,
        ]);
    }
}
