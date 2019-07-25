<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('series')->delete();
        
        \DB::table('series')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"TF 12"},"en":{"title":"TF 12 en"}}',
                'image' => NULL,
                'order' => 'aa',
                'family_id' => 1,
                'brand_id' => 3,
                'model_id' => 3,
                'created_at' => '2019-07-18 15:43:49',
                'updated_at' => '2019-07-18 15:43:49',
            ),
        ));
        
        
    }
}