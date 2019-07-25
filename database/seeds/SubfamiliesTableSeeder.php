<?php

use Illuminate\Database\Seeder;

class SubfamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subfamilies')->delete();
        
        \DB::table('subfamilies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"Volcador"},"en":{"title":"Volcador en"}}',
                'image' => NULL,
                'order' => 'aa',
                'family_id' => 2,
                'created_at' => '2019-07-19 11:06:27',
                'updated_at' => '2019-07-19 11:06:27',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"Hidrogr\\u00faa"},"en":{"title":"Hidrogr\\u00faa en"}}',
                'image' => NULL,
                'order' => 'bb',
                'family_id' => 2,
                'created_at' => '2019-07-19 11:06:51',
                'updated_at' => '2019-07-19 11:06:51',
            ),
        ));
        
        
    }
}