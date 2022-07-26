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
                'imgurl' => 'https://as1.ftcdn.net/v2/jpg/01/94/28/76/1000_F_194287658_mYyqkK3FAZcoBCqVfUTskqaCILiQN710.jpg'
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
                'imgurl' => 'https://insights.workwave.com/wp-content/uploads/2020/12/choosing-the-right-tool-plumber-repairing-washing-machine-picture-id1170038003.jpg'
            ]
        );

        //plumbing 2
        DB::table('services')->insert(
            [
                'category_id' => 2 ,
                'name' => 'Water Heater System',
                'description' => 'Provide heater installation and repair especially in the cold weather is taking over.',
                'imgurl' => 'https://www.sunsetplumbingofbend.com/wp-content/uploads/2019/10/sunset-plumbing-electric-water-heater-400x265.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 2 ,
                'name' => 'Repair of Leakages',
                'description' => 'Leaks are a very common problem. We have many years of experience in leaking or broken pipes issues.',
                'imgurl' => 'https://caitcocares.com/wp-content/uploads/2017/07/caitco3-1.png'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 2 ,
                'name' => 'Toilet',
                'description' => 'Using a high powered water jet in order to clean all clogged pipes and repair it basically.',
                'imgurl' => 'https://images.pexels.com/photos/4239088/pexels-photo-4239088.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 2 ,
                'name' => 'Garbage disposals',
                'description' => 'Install new ones or perhaps repair the spotted damaged areas over existing disposal.',
                'imgurl' => 'https://www.rootermancan.com/wp-content/uploads/2022/02/garbage-disposal-food.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 2 ,
                'name' => 'Drain',
                'description' => 'Getting the draining system entirely cleaned, letting the water flow properly.',
                'imgurl' => 'https://media.istockphoto.com/photos/water-draining-at-sink-background-water-flowing-drain-in-washbasin-picture-id1164659799?k=20&m=1164659799&s=612x612&w=0&h=AkXJ0EECmL-38X5N18s8feb-KE6ltZtx9wYJUNzDnow='
            ]
        );

        //cleaning 3
        DB::table('services')->insert(
            [
                'category_id' => 3 ,
                'name' => 'Bedroom',
                'description' => 'Clean bed, pillow and the whole room with the high technology machine. No wasting time.',
                'imgurl' => 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 3 ,
                'name' => 'Garbage',
                'description' => 'Gather, take out every kind of garbage. We make sure the space are clean after the garbage take out.',
                'imgurl' => 'https://images.pexels.com/photos/2264665/pexels-photo-2264665.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 3 ,
                'name' => 'Commercial Cleaning',
                'description' => 'Office cleaning, perform cleaning services for commercial buildings such as office spaces, schools, community buildings, and more.',
                'imgurl' => 'https://www.flyingcolour.net/wp-content/uploads/2021/05/The-Perfect-Time-to-Start-Your-Building-Cleaning-Service-Business-is-Now.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 3 ,
                'name' => 'Pressure washing',
                'description' => 'Using a powerful stream of water to clean dirt-ridden carpets, moldy buildings, loose paints on walls, etc.',
                'imgurl' => 'https://www.halorestorationservices.com/wp-content/uploads/2019/08/pressure-washing-pavestone.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 3 ,
                'name' => 'Sanitization and Disinfection',
                'description' => 'Sanitization and disinfection use physical and chemical means to ensure that our dwellings and office spaces are safe for human inhabitation and cut the COVID chain.',
                'imgurl' => 'https://images.pexels.com/photos/4099267/pexels-photo-4099267.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );


        // painting 4
        DB::table('services')->insert(
            [
                'category_id' => 4 ,
                'name' => 'Window Trim',
                'description' => 'In any painting project, We assure you the right paint and tools that will get you the most professional results, and painting window trim is no exception.',
                'imgurl' => 'https://www.thespruce.com/thmb/h2zbvOZuURxlLcXS47X1RaBaUUM=/1500x1000/filters:no_upscale()/painting-interior-window-trim-1822407_hero_0167-540782d4568d4241b23ffccf466ff519.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 4 ,
                'name' => 'Fencing',
                'description' => 'There are endless benefits to painting a fence in your outside space. With Doctor Home, we are giving you a new color or refinishing a tired-looking fence to brighten up your surroundings.',
                'imgurl' => 'https://www.handleking.co.uk/media/wysiwyg/blog_img/painting-a-garden-fence.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 4 ,
                'name' => 'Stucco',
                'description' => 'Most common problems with stucco siding is water damage. Apart from the fact that painting your stucco makes it look better, paint also helps protect the stucco from rain, pollution, and mold.',
                'imgurl' => 'https://resin-expert.com/wp-content/uploads/2021/08/The-Best-Exterior-Paint-for-Stucco.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 4 ,
                'name' => 'Brick & Cinder block',
                'description' => 'Since our brick stain sinks deep into the pores of your brick, we’ll perform a water test to evaluate the porosity and permeability of your brick. We make sure you get permanent results, guaranteed.',
                'imgurl' => 'https://empire-s3-production.bobvila.com/articles/wp-content/uploads/2013/11/how-to-paint-brick.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 4 ,
                'name' => 'Wood',
                'description' => 'We have a proffessional step to keep the wood healthy. Step 1 : Sanding Wooden surfaces need to be sanded first, then apply stain on the surface and last step is polishing manually or using a machine.',
                'imgurl' => 'https://woodimprove.com/wp-content/uploads/2018/10/best-paints-for-wood-reviews1.jpg'
            ]
        );

        // flooring 5
        DB::table('services')->insert(
            [
                'category_id' => 5 ,
                'name' => 'Modeling',
                'description' => 'We have successfully completed several interactive floor plans for private owners of small/sprawling properties, property managers, leasing agents, real estate developers and architects.',
                'imgurl' => 'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 5 ,
                'name' => 'Dent floor',
                'description' => 'Dent floor looks like a little trouble but it can be beyond repair and cause much money. Doctor Home will provide a cheap and fast service for you.',
                'imgurl' => 'https://www.diychatroom.com/attachments/floor1-jpg.463170/'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 5 ,
                'name' => 'Water Damage',
                'description' => 'The problem will almost always require refinishing and the replacement of some or all of the damaged wood. We offer observations on preventing and minimizing the damage that water can cause to your hardwood floors.',
                'imgurl' => 'https://orange-restoration.com/wp-content/uploads/2017/11/wood-floor-water-damage.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 5 ,
                'name' => 'Broken tile',
                'description' => 'Unlike most, we are not just glorified tile cleaners. Doctor Home workers are fully trained in all aspects of tile repair & replacements. If it can be done Doctor Home can do it. All fully guaranteed. No spare tiles.',
                'imgurl' => 'https://media.homeanddecor.com.sg/public/2018/02/83089-tilespop1.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 5 ,
                'name' => 'Loose boards',
                'description' => 'As the wood contacted with water it can cause loose board or bukcle wood. We will do the obervation to fix the floor as effecient as possible with the minimum spend.',
                'imgurl' => 'https://media.istockphoto.com/photos/loose-floorboard-picture-id93201047?k=20&m=93201047&s=170667a&w=0&h=gYHp3hJ3YveKw3fqQ3yd9cpYI_6F1AOIpxeFDitodmI='
            ]
        );

        // carpentry 6
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Custom Cabinets',
                'description' => 'We have experience with all types of residential cabinetry projects. When it comes to your custom project, we provide a personal touch not often experienced with the big-box cabinet builders.',
                'imgurl' => 'https://www.cabinetmakernyc.com/wp-content/uploads/2021/10/CABINET-MAKER-NYC-KITCHEN-CABINET-scaled.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Shelving & Bookcases',
                'description' => 'If you are currently considering increasing the storage in your home with custom shelves or bookcases, you should not hesitate to contact your Doctor Home! Let our team do the heavy lifting on your behalf.',
                'imgurl' => 'https://www.foxwoodco.com.au/content/uploads/2021/04/0V6A2399.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Roof repair',
                'description' => 'Whether due to severe storm damage or years of wear and tear, when you have a roofing problem that needs to be fixed now, Doctor Home will be at your home fast and will fix it right the first time.',
                'imgurl' => 'https://i.pinimg.com/736x/8e/f8/c0/8ef8c02c46316efc48ab65a97ae0c031.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Kitchen Carbinet',
                'description' => 'The Home Doctor\'s kitchen cabinet installers are local, licensed, insured, and undergo a thorough background-screening process. We offer a wide range of affordable financing options.',
                'imgurl' => 'https://images.pexels.com/photos/94865/pexels-photo-94865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Carbinet makeover',
                'description' => 'We provide professional and precision installation to compliment our custom design and cabinet making services. Through the use of advanced technology, we are able to perfectly install your new cabinetry.',
                'imgurl' => 'https://cdn.vox-cdn.com/thumbor/IJTMLyrwcUjbVvEr950M7vhWsYU=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19603926/Cabinetrs_1119_Idea_House_DSC_0402.0.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Closet',
                'description' => 'Our closet cabinet solutions create the most wanted dream homes. We have closet solutions for every space and every personality. We transform reach-in closets as easily as walk-in.',
                'imgurl' => 'https://mobilecontent.costco.com/live/resource/img/static-us-landing-pages/20w08114-closet-walk-in.jpg'
            ]
        );
        DB::table('services')->insert(
            [
                'category_id' => 6 ,
                'name' => 'Bath',
                'description' => 'Custom cabinetry can enhance your bath space and increase the value of your home. We work to capture the unique personality and style of each customer.',
                'imgurl' => 'https://images.pexels.com/photos/7045908/pexels-photo-7045908.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ]
        );



    }
}
