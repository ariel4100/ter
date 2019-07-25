<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"L\\u00ednea T12","subtitle":"Potencia 35 CV","text":"<p>Toma de fuerza de accionamiento neum&aacute;tico, para abertura lateral de 8 agujeros de fijaci&oacute;n. Fabricada en una carcaza de fundici&oacute;n gris, con cinco ejes de salida diferentes. Esta toma de fuerza ha sido desarrollada espec&iacute;ficamente para ofrecer el mayor rendimiento en los camiones Isuzu. Nuestro sector de producci&oacute;n cuenta con la m&aacute;s avanzada tecnolog&iacute;a, y para asegurar la m&aacute;xima calidad de nuestros productos, desde marzo del 2010 estamos certificados bajo las normas de calidad ISO 9000:2008.<\\/p>","title_car":"Caracteristicas","caracteristica":"<p>C&oacute;digo Salida Potencia Torque cont&iacute;nuo Torque intermitente Marca Modelos<\\/p>","relacionados":"Productos relacionados"},"en":{"title":"L\\u00ednea T12 en","subtitle":"Potencia 35 CV en","text":"<p>Toma de fuerza de accionamiento neum&aacute;tico, para abertura lateral de 8 agujeros de fijaci&oacute;n. Fabricada en una carcaza de fundici&oacute;n gris, con cinco ejes de salida diferentes. Esta toma de fuerza ha sido desarrollada espec&iacute;ficamente para ofrecer el mayor rendimiento en los camiones Isuzu. Nuestro sector de producci&oacute;n cuenta con la m&aacute;s avanzada tecnolog&iacute;a, y para asegurar la m&aacute;xima calidad de nuestros productos, desde marzo del 2010 estamos certificados bajo las normas de calidad ISO 9000:2008. en<\\/p>","title_car":"Caracteristicas en","caracteristica":"<p>C&oacute;digo Salida Potencia Torque cont&iacute;nuo Torque intermitente Marca Modelos<\\/p>","relacionados":"Productos relacionados en"}}',
                'image' => '{"gallery":[{"image":"gallery\\/productos\\/zsQHb4mEyOWA7sZw3gOYj4f4na17LG58zR6vGRLH.png","title_es":null,"title_en":null},{"image":"gallery\\/productos\\/AdGg498Zbpwb2N5gVXrSDHmGXH7BYT1OwDtsJd3I.png","title_es":null,"title_en":null}],"imagenes":[{"image":"gallery\\/productos\\/dd9eS7zCnRSp8We7gV4xpzVIDoejqqn3WgY6mhrS.png","title_es":null,"title_en":null}]}',
                'order' => 'aa',
                'family_id' => 1,
                'brand_id' => 3,
                'model_id' => 3,
                'serie_id' => 1,
                'created_at' => '2019-07-18 16:12:41',
                'updated_at' => '2019-07-18 18:59:39',
            ),
        ));
        
        
    }
}