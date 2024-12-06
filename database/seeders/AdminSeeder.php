<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Firstname' => 'Admin',
            'Lastname'=> 'Admin',
            'email' => 'admin@rmanage.com',
            'password' => Hash::make('ADMIN2024'),
            'RoleID' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
