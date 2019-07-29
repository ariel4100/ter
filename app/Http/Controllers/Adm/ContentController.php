<?php

namespace App\Http\Controllers\Adm;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index($section){
        $contenido = Content::firstOrCreate(['section' => $section]);
//        dd($contenido);
        $imagenes = $contenido->image;
//        $archivos = $contenido->file;
        $contenido = $contenido->text;
//        dd($imagenes);
        return view('adm.content.index',compact('section','contenido','imagenes'));
    }

    public function update(Request $request){
//        dd($request->all());
        $section = $request->section;
        $gallery = $request->imagenes;
        $maquinas = $request->maquinas;
        $laboratorios = $request->laboratorios;
        $marcas = $request->marcas;
        $servicios = $request->servicios;
        $archivos = $request->archivos;
        $contenido = Content::firstOrCreate(['section' => $section]);
        if (isset($gallery))
        {
//            dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($contenido->image['imagenes'][$k]);
                    $gallery[$k]['image'] = $contenido->image['imagenes'][$k]['image'];
                }else{
//                    dd($item['image']);
                    $path = $item['image']->store("uploads/$section/imagenes");
                    $gallery[$k]['image'] = $path;
                }
            }
        }
//        dd($gallery);

        if (isset($servicios))
        {
            //dd($gallery);
            foreach ($servicios as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($contenido->image['imagenes'][$k]);
                    $servicios[$k]['image'] = $contenido->image['servicios'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store("uploads/$section/servicios");
                    $servicios[$k]['image'] = $path;
                }
            }
        }
        if (isset($marcas))
        {
            //dd($gallery);
            foreach ($marcas as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($contenido->image['imagenes'][$k]);
                    $marcas[$k]['image'] = $contenido->image['marcas'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store("uploads/$section/marcas");
                    $marcas[$k]['image'] = $path;
                }
            }
        }
        if (isset($maquinas))
        {
            //dd($gallery);
            foreach ($maquinas as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $maquinas[$k]['image'] =  $contenido->image['maquinas'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store("uploads/$section/maquinas");
                    $maquinas[$k]['image'] = $path;
                }
            }
        }
        if (isset($laboratorios))
        {
            //dd($gallery);
            foreach ($laboratorios as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $laboratorios[$k]['image'] =  $contenido->image['laboratorios'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store("uploads/$section/laboratorios");
                    $laboratorios[$k]['image'] = $path;
                }
            }
        }
        if (isset($archivos))
        {
            //dd($gallery);
            foreach ($archivos as $k => $item) {
//                dd($item['image']);
                if (is_string($item['image']))
                {
//                    dd($item);
                    $archivos[$k]['image'] =  $contenido->image['archivos'][$k]['image'];
                }else{
//                    dd($item);
                    $filename  = 'archivo-' . time() . '.' . $item['image']->getClientOriginalName();;
                    $path = $item['image']->storeAs("uploads/$section/archivos",$filename);
                    $archivos[$k]['image'] = $path;
                    $archivos[$k]['title_es'] = $item['title_es'];
                    $archivos[$k]['title_en'] = $item['title_en'];
                }
            }
        }
        //dd();
        $contenido->section = $section;
        $contenido->text = $request->only('es','en');
        $contenido->image = ['imagenes' => $gallery, 'maquinas' => $maquinas, 'laboratorios' => $laboratorios, 'marcas' => $marcas, 'servicios' => $servicios, 'archivos' => $archivos,'video' => $request->gallery];
        // $contenido->file = ['archivos' => $archivos];
        $contenido->save();
//        dd($contenido);
        return back()->with('status','Actualizado correctamente');
    }
}
