<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('models')->delete();
        
        \DB::table('models')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"M. Benz G-20"},"en":{"title":"M. Benz G-20 en"}}',
                'image' => NULL,
                'order' => 'aa',
                'family_id' => 1,
                'brand_id' => 3,
                'created_at' => '2019-07-18 14:44:13',
                'updated_at' => '2019-07-18 15:04:54',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"M. Benz G-27"},"en":{"title":"M. Benz G-27 en"}}',
                'image' => NULL,
                'order' => 'bb',
                'family_id' => 1,
                'brand_id' => 3,
                'created_at' => '2019-07-18 15:07:01',
                'updated_at' => '2019-07-18 15:07:01',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => '{"es":{"title":"M. Benz G 3\\/60"},"en":{"title":"M. Benz G 3\\/60  en"}}',
                'image' => NULL,
                'order' => 'cc',
                'family_id' => 1,
                'brand_id' => 3,
                'created_at' => '2019-07-18 15:07:13',
                'updated_at' => '2019-07-18 15:07:13',
            ),
        ));
        
        
    }
}