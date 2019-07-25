<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section' => 'home',
                'text' => '{"es":{"text":"<p><span style=\\"color:#000000\\">DISE&Ntilde;O, PRODUCCI&Oacute;N Y POST VENTA<\\/span><\\/p>\\r\\n\\r\\n<h1><span style=\\"color:#e74c3c\\">Fabricantes l&iacute;deres<\\/span><\\/h1>\\r\\n\\r\\n<h1><span style=\\"color:#e74c3c\\">en el mercado<\\/span><\\/h1>"},"en":{"text":null}}',
                'image' => 'uploads/sliders/jlbIGyQ9DnT2J6b5QMwMM2If2mGVjchOn4RSIgt4.png',
                'order' => 'aa',
                'created_at' => '2019-07-18 12:36:18',
                'updated_at' => '2019-07-18 12:43:28',
            ),
            1 => 
            array (
                'id' => 2,
                'section' => 'nosotros',
                'text' => '{"es":{"text":"<p><span style=\\"color:#000000\\">GARANT&Iacute;A DE CALIDAD<\\/span><\\/p>\\r\\n\\r\\n<h1><span style=\\"color:#e74c3c\\">Dise&ntilde;o, producci&oacute;n<\\/span><\\/h1>\\r\\n\\r\\n<h1><span style=\\"color:#e74c3c\\">y servicio post-venta<\\/span><\\/h1>"},"en":{"text":null}}',
                'image' => 'uploads/sliders/fRGb1hKcNvUEaYdYJ8rFAbpCalfW7afuVG6haEmS.png',
                'order' => 'aa',
                'created_at' => '2019-07-18 12:39:44',
                'updated_at' => '2019-07-18 12:41:06',
            ),
        ));
        
        
    }
}