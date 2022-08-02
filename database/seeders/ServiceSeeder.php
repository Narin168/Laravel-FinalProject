<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                'category_id' => 1 ,
                'name' => 'Electrical',
                'description' => 'ssksksks',
                'imgurl' => 'sksksksksk'
            ]
        );
     
    
    }
}