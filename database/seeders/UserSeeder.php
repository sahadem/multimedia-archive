<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Carbon;
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
            'first_name' => 'yaser',
            'last_name' => 'fathollahi',
            'email' => 'yaserkqz@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '9384339099',
            'role' => 'admin',
            'deleted' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
