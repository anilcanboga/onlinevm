<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['uuid' => uniqid(),'name' => "user"]);//1
        DB::table('roles')->insert(['uuid' => uniqid(),'name' => "sadmin"]);//2
    }
}
