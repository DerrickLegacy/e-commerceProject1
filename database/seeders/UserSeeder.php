<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('users')->insert([
            ['username'=>'Derrick ',
            'email'=>'derrick@gmail.com',
            'password'=>Hash::make(12345)],
            ['username'=>'Legacy',
            'email'=>'legacy@gmail.com',
            'password'=>Hash::make(12345)],
            ['username'=>'Ahaabwe',
            'email'=>'ahabwe@gmail.com',
            'password'=>Hash::make(12345)]
        ]);
    }
}
