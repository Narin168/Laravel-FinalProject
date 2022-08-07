<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'doctorhome@gmail.com',
                'password' => '$2y$10$Xu1umZxnlsB1aqtVSxEOM.S5u5o8xFTqfiob6MkGWGBEBDjqqdYlK',
                'status' => 'isAdmin'
            ]
        );
    }
}
