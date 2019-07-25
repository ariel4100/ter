<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"es":{"title":"Participamos un a\\u00f1o m\\u00e1s de la Exposici\\u00f3n Transporte y Log\\u00edstica","text":"<p>En TER Aplicaciones Especiales nos encontramos en constante proceso de mejora en la calidad. A&ntilde;o a a&ntilde;o vamos incorporando nuevos productos. En esta oportunidad tuvimos el honor de estar presentes en la Exposici&oacute;n de Log&iacute;stica y Transporte realizada cada dos a&ntilde;os en la provincia de Buenos Aires. Un evento que re&uacute;ne las marcas l&iacute;deres en el rubro. Presentando nuestro amplio cat&aacute;logo de productos, &nbsp;sumamos a ellos el prototipo del malacate hidr&aacute;ulico. El malacate hidr&aacute;ulico se usa en los camiones petrol&iacute;feros, para trasladar las plataformas. TER es el primer fabricante de este tipo de malacate en el pa&iacute;s. Lo invitamos a recorrer la galer&iacute;a de im&aacute;genes. Para mayor informaci&oacute;n, no dude en contactarse.&nbsp;<\\/p>"},"en":{"title":"Participamos un a\\u00f1o m\\u00e1s de la Exposici\\u00f3n Transporte y Log\\u00edstica  en","text":"<p>En TER Aplicaciones Especiales nos encontramos en constante proceso de mejora en la calidad. A&ntilde;o a a&ntilde;o vamos incorporando nuevos productos. En esta oportunidad tuvimos el honor de estar presentes en la Exposici&oacute;n de Log&iacute;stica y Transporte realizada cada dos a&ntilde;os en la provincia de Buenos Aires. Un evento que re&uacute;ne las marcas l&iacute;deres en el rubro. Presentando nuestro amplio cat&aacute;logo de productos, &nbsp;sumamos a ellos el prototipo del malacate hidr&aacute;ulico. El malacate hidr&aacute;ulico se usa en los camiones petrol&iacute;feros, para trasladar las plataformas. TER es el primer fabricante de este tipo de malacate en el pa&iacute;s. Lo invitamos a recorrer la galer&iacute;a de im&aacute;genes. Para mayor informaci&oacute;n, no dude en contactarse.&nbsp; en<\\/p>"}}',
                'image' => NULL,
                'order' => 'aa',
                'category_id' => 2,
                'created_at' => '2019-07-17 20:02:56',
                'updated_at' => '2019-07-17 20:02:56',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"es":{"title":"Soluciones Integrales TER: Desarrollo de principio a fin de un producto","text":null},"en":{"title":"Soluciones Integrales TER: Desarrollo de principio a fin de un producto en","text":null}}',
                'image' => NULL,
                'order' => 'aa',
                'category_id' => 3,
                'created_at' => '2019-07-17 20:46:19',
                'updated_at' => '2019-07-17 20:46:19',
            ),
        ));
        
        
    }
}