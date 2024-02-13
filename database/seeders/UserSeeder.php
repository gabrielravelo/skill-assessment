<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@quotes.com',
            'password' => Hash::make('password'),
            'admin'=>true,
            'email_verified_at'=>now(),
            'created_at'=>now()
        ]);
    }
}
