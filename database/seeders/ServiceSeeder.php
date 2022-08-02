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
                'name' => 'Wire Planning',
                'description' => 'Plan layouts for electrical wiring for new buildings (including positioning electrical outlets, lighting fixtures, heating outlets, and ventilation systems)',
                'imgurl' => 'https://thumbs.dreamstime.com/z/electrician-tools-electrical-equipment-wiring-diagram-electrician-tools-electrical-equipment-wiring-diagram-205201199.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 1 ,
                'name' => 'Electrical Maintenance',
                'description' => 'Maintain wiring, electrical parts, and auxiliary electrical systems in all kinds of machines that run on electrical power.',
                'imgurl' => 'https://thumbs.dreamstime.com/b/electrician-worker-builder-engineer-blue-print-scheme-project-front-fuse-switch-box-40288869.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 1 ,
                'name' => 'Install & Repair',
                'description' => 'Installing, maintaining, and repairing electrical control, wiring, and lighting systems,repairing and replacing equipment, electrical wiring, and fixtures.',
                'imgurl' => 'https://thumbs.dreamstime.com/b/electrician-installing-socket-new-house-installs-65616239.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 1 ,
                'name' => 'Household Appliances',
                'description' => 'Installing, maintaining, and repairing electrical household appliances ranging from air conditioner, refrigerator, washing machine, etc.',
                'imgurl' => 'https://thumbs.dreamstime.com/b/plumber-fixing-domestic-washing-machine-85205385.jpgs'
            ]
        );
     
    
    }
}
