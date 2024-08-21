<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Gustavo Diniz",
            'email' => "gus@csi.com",
            'password' => Hash::make("12345678"),
        ]);

        DB::table('users')->insert([
            'name' => "André Neves",
            'email' => "andr@andr.com.br",
            'password' => Hash::make("123456789"),
        ]);
        
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
