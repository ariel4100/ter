<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('families')->delete();
        
        \DB::table('families')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"Tomas de Fuerza"},"en":{"title":"Tomas de Fuerza en"}}',
                'image' => NULL,
                'order' => 'aa',
                'created_at' => '2019-07-18 13:42:02',
                'updated_at' => '2019-07-18 13:47:39',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"Bombas hidr\\u00e1ulicas"},"en":{"title":"Bombas hidr\\u00e1ulicas en"}}',
                'image' => NULL,
                'order' => 'bb',
                'created_at' => '2019-07-18 13:47:06',
                'updated_at' => '2019-07-18 13:47:06',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => '{"es":{"title":"Cajas de Transferencia"},"en":{"title":"Cajas de Transferencia en"}}',
                'image' => NULL,
                'order' => 'cc',
                'created_at' => '2019-07-18 13:47:19',
                'updated_at' => '2019-07-18 13:47:19',
            ),
            3 => 
            array (
                'id' => 4,
                'text' => '{"es":{"title":"V\\u00e1lvulas"},"en":{"title":"V\\u00e1lvulas en"}}',
                'image' => NULL,
                'order' => 'aa',
                'created_at' => '2019-07-18 13:47:25',
                'updated_at' => '2019-07-18 13:47:25',
            ),
        ));
        
        
    }
}