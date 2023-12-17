<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     // UserSeeder::class,
        //     // CategorySeeder::class
        // ]);
        DB::table('users')->insert([
            'name' => 'toàn',
            'email' => 'lqph@gmail.com',
            'password' => bcrypt(1)
        ]);
    }
}
