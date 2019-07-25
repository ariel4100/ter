<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"Ford"},"en":{"title":"Ford EN"}}',
                'image' => NULL,
                'order' => 'aa',
                'family_id' => 1,
                'created_at' => '2019-07-18 14:09:22',
                'updated_at' => '2019-07-18 14:09:22',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"Scania"},"en":{"title":"Scania en"}}',
                'image' => NULL,
                'order' => 'bb',
                'family_id' => 1,
                'created_at' => '2019-07-18 14:09:37',
                'updated_at' => '2019-07-18 14:09:37',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => '{"es":{"title":"Mercedes Benz"},"en":{"title":"Mercedes Benz en"}}',
                'image' => NULL,
                'order' => 'cc',
                'family_id' => 1,
                'created_at' => '2019-07-18 14:09:48',
                'updated_at' => '2019-07-18 14:09:48',
            ),
            3 => 
            array (
                'id' => 4,
                'text' => '{"es":{"title":"Iveco"},"en":{"title":"Iveco en"}}',
                'image' => NULL,
                'order' => 'dd',
                'family_id' => 1,
                'created_at' => '2019-07-18 14:10:03',
                'updated_at' => '2019-07-18 14:10:03',
            ),
            4 => 
            array (
                'id' => 5,
                'text' => '{"es":{"title":"Renault"},"en":{"title":"Renault en"}}',
                'image' => NULL,
                'order' => 'ee',
                'family_id' => 1,
                'created_at' => '2019-07-18 14:10:23',
                'updated_at' => '2019-07-18 14:10:23',
            ),
        ));
        
        
    }
}