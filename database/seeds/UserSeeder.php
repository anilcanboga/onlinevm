<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'uuid' => uniqid(),
            'name' => "Common User",
            'surname' => "Common User",
            'identity_number' => '0000000000000',
            'email' => "user@test.com",
            'role_id' => 1,
            'password' => Hash::make('user123'),
            'email_verified_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'uuid' => uniqid(),
            'name' => "Super Admin",
            'surname' => "Super Admin",
            'identity_number' => '0000000000001',
            'email' => "sadmin@admin.com",
            'role_id' => 2,
            'password' => \Illuminate\Support\Facades\Hash::make('Sadmin451'),
            'email_verified_at' => \Carbon\Carbon::now(),
        ]);
    }
}
