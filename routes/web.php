<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


/*************************RUTAS PUBLICAS******************************/
Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

//    Route::get('/{section}', 'FrontendController@section')->name('section');
    Route::get('/', 'FrontendController@home')->name('home');
    Route::get('nosotros', 'FrontendController@nosotros')->name('nosotros');
    Route::get('novedades','FrontendController@noticias')->name('noticias');
    Route::get('novedades/{id}/novedad', 'FrontendController@show_noticias')->name('show_noticias');
    Route::get('novedades/{news}','FrontendController@noticias_blog')->name('noticias_blog');
    Route::get('calidad', 'FrontendController@calidad')->name('calidad');
    Route::get('contacto', 'FrontendController@contacto')->name('contacto');

    Route::get('productos', 'ProductController@familias')->name('familias');
    Route::get('marcas/{id}', 'ProductController@marcas')->name('marcas');
    Route::get('modelos/{id}', 'ProductController@modelos')->name('modelos');
    Route::get('serie/{id}', 'ProductController@serie')->name('serie');
    Route::get('serie/sub/{id}', 'ProductController@seriesub')->name('serie.sub');
    Route::get('subfamilia/serie/{id}', 'ProductController@subfamiliaserie')->name('subfamilia.serie');
    Route::get('productos/{id}', 'ProductController@productos')->name('productos');
    Route::get('producto/sub1/{id}', 'ProductController@productosub')->name('producto.sub');
    Route::get('productos/sub/{id}', 'ProductController@productossub')->name('productos.sub');
    Route::get('producto/{id}', 'ProductController@producto')->name('producto');

    Route::get('buscador','FrontendController@buscador')->name('buscador');

    /***MAIL***/
    Route::post('contacto','MailController@contacto')->name('contacto.mail');
//    Route::post('postventa','MailController@postventa')->name('post.venta.mail');
});
//Route::get('/','FrontendController@home')->name('home');

Auth::routes();

/*************************RUTAS ADM******************************/


Route::group([ 'middleware' => 'auth',  'prefix' => 'adm'],function (){
    Route::view('/',  'adm.dashboard.index');
    // SLIDERS
    Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
        Route::get('{seccion}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
        Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
        Route::get('{seccion}/list', ['uses' => 'Adm\SliderController@list', 'as' => '.list']);
        Route::get('edit/{slider}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
        Route::post('update/{slider}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
        Route::get('destroy/{slider}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
    });
    // CONTENIDO
    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{section}', ['uses' => 'Adm\ContentController@index', 'as' => '.index']);
        Route::get('{section}/create', ['uses' => 'Adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'Adm\ContentController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ContentController@update', 'as' => '.update']);
        Route::get('/eliminar/lista/{section}/{contenido}', ['uses' => 'Adm\ContentController@delete', 'as' => '.delete']);
    });

    // PRODUCTOS
    Route::group(['prefix' => 'productos', 'as' => 'productos'], function() {
        Route::get('{general}', ['uses' => 'Adm\ProductController@index', 'as' => '.index']);
        Route::get('crear/productos/{general}', ['uses' => 'Adm\ProductController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ProductController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\ProductController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ProductController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\ProductController@delete', 'as' => '.destroy']);
    });
    //CONFIGURACIONES DE PRODUCTOS
    Route::group(['prefix' => 'config', 'as' => 'config'], function() {
        Route::get('{producto}', ['uses' => 'Adm\ConfigController@index', 'as' => '.index']);
        Route::get('crear/config/{producto}', ['uses' => 'Adm\ConfigController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ConfigController@store', 'as' => '.store']);
        Route::get('edit/{id}', ['uses' => 'Adm\ConfigController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ConfigController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\ConfigController@delete', 'as' => '.destroy']);
    });
    /* Route::group(['prefix' => 'pedidos', 'as' => 'pedidos'], function() {
         Route::get('pedidos', ['uses' => 'Adm\OrderController@index', 'as' => '.index']);

     });*/
    // FAMILIA
//    Route::group(['prefix' => 'familia', 'as' => 'familia'], function() {
//        Route::get('{general}', ['uses' => 'Adm\FamilyController@index', 'as' => '.index']);
//        Route::get('crear/familia/{general}', ['uses' => 'Adm\FamilyController@create', 'as' => '.create']);
//        Route::post('/store', ['uses' => 'Adm\FamilyController@store', 'as' => '.store']);
//        Route::get('{id}/edit/{general}', ['uses' => 'Adm\FamilyController@edit', 'as' => '.edit']);
//        Route::put('{contenido}/update', ['uses' => 'Adm\FamilyController@update', 'as' => '.update']);
//        Route::get('{id}/destroy', ['uses' => 'Adm\FamilyController@delete', 'as' => '.destroy']);
//    });

//    Route::group(['prefix' => 'subfamilia', 'as' => 'subfamilia'], function() {
//        Route::get('{general}', ['uses' => 'Adm\SubfamilyController@index', 'as' => '.index']);
//        Route::get('crear/subfamilia/{general}', ['uses' => 'Adm\SubfamilyController@create', 'as' => '.create']);
//        Route::post('/store', ['uses' => 'Adm\SubfamilyController@store', 'as' => '.store']);
//        Route::get('{id}/edit/{general}', ['uses' => 'Adm\SubfamilyController@edit', 'as' => '.edit']);
//        Route::put('{contenido}/update', ['uses' => 'Adm\SubfamilyController@update', 'as' => '.update']);
//        Route::get('{id}/destroy', ['uses' => 'Adm\SubfamilyController@delete', 'as' => '.destroy']);
//    });
    //Route::get('familia/{general}','Adm\FamilyController@index')->name('fami.index');
    Route::resource('familia','Adm\FamilyController');
    Route::get('familia/delete/{id}','Adm\FamilyController@delete')->name('familia.delete');
    Route::resource('subfamilia','Adm\SubfamilyController');
    Route::get('subfamilia/delete/{id}','Adm\SubfamilyController@delete')->name('subfamilia.delete');
    Route::resource('marca','Adm\BrandController');
    Route::get('marca/delete/{id}','Adm\BrandController@delete')->name('marca.delete');
    Route::resource('modelo','Adm\ModelController');
    Route::get('modelo/delete/{id}','Adm\ModelController@delete')->name('modelo.delete');
    Route::resource('serie','Adm\SerieController');
    Route::get('serie/delete/{id}','Adm\SerieController@delete')->name('serie.delete');
    Route::resource('producto','Adm\ProductController');
    Route::get('producto/delete/{id}','Adm\ProductController@delete')->name('producto.delete');


    Route::resource('categoria','Adm\CategoryController');
    Route::resource('noticia','Adm\NewController');
    Route::resource('metadatos','Adm\MetadataController');
    Route::resource('usuario','Adm\UserController');

    Route::resource('video','Adm\VideoController');
});