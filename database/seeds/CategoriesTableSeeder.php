<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"Eventos"},"en":{"title":"Eventos en"}}',
                'order' => 'bb',
                'created_at' => '2019-07-17 19:52:18',
                'updated_at' => '2019-07-17 19:52:18',
            ),
            1 => 
            array (
                'id' => 3,
                'text' => '{"es":{"title":"Productos"},"en":{"title":"Productos en"}}',
                'order' => 'cc',
                'created_at' => '2019-07-17 19:53:37',
                'updated_at' => '2019-07-17 19:53:37',
            ),
            2 => 
            array (
                'id' => 4,
                'text' => '{"es":{"title":"Actualidad"},"en":{"title":"Actualidad en"}}',
                'order' => 'aa',
                'created_at' => '2019-07-17 19:55:24',
                'updated_at' => '2019-07-17 19:55:24',
            ),
        ));
        
        
    }
}