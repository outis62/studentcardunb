<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            'name' => 'BADO',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
           
        ]);
        DB::table('users')->insert([
            'name' => 'ZABRE',
            'email' => 'zabre@gmail.com',
            'password' => Hash::make('zabre'),
           
        ]);
    }

}
