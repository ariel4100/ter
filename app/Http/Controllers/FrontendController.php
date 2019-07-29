<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Family;
use App\News;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendController extends Controller
{
    public function home()
    {
//        dd($request->all());
        $slider = Slider::where('section', 'home')->orderBy('order')->get();
        $contenido = Content::where('section','home')->first();
        $imagenes = $contenido->image ?? [];
        $contenido = $contenido->text[App::getLocale()] ?? [];
        $familias = Family::orderBy('order')->get();
        return view("page.home", compact('contenido','imagenes','slider','familias'));
    }
    public function nosotros()
    {
//        dd($request->all());
        $slider = Slider::where('section', 'nosotros')->orderBy('order')->get();
        $contenido = Content::where('section','nosotros')->first();
        $imagenes = $contenido->image ?? [];
        $contenido = $contenido->text[App::getLocale()];
        return view("page.nosotros", compact(   'contenido','slider','imagenes'));
    }
    public function calidad()
    {
        $contenido = Content::where('section','calidad')->first();
//        dd($contenido);
        $imagenes = $contenido->image;
        $archivos = $contenido->file;
        $contenido = $contenido->text[App::getLocale()];
        return view("page.calidad", compact('contenido','imagenes','archivos'));
    }
    public function contacto()
    {
//        dd($request->all());
        return view("page.contacto");
    }

    public function noticias()
    {
        $categorias = Category::orderBy('order')->get();
        $noticias = News::orderBy('order')->get();
//        dd($noticias);
//        $noticias = $noticias->text[App::getLocale()];
        return view('page.noticias.noticias',compact('noticias','categorias'));
    }

    public function show_noticias($id) {
        $categoria = Category::find($id);
//        dd($categoria->news);
        $categorias = Category::orderBy('order')->get();
        $noticias = $categoria->news()->orderBy('order')->paginate(8);
        return view('page.noticias.show_noticias', compact('noticias', 'categoria', 'categorias'));
    }

    public function noticias_blog(News $news)
    {
        $categorias = Category::orderBy('order')->get();
//        dd($news);
        $noticia = $news;
        $imagenes = $news->image ?? [];
        $news = $news->text[App::getLocale()];
        return view('page.noticias.noticias_blog',compact('news','categorias','imagenes','noticia'));
    }

    public function buscador(Request $request)
    {
        //dd(isset($request->name));
        if (isset($request->name))
        {
            $resultado = Product::Orwhere('text->title_'.App::getLocale(), 'LIKE', "%$request->name%")->get();
        }else{
            $resultado = [];
        }
        //$resultado = Product::whereLike(['text->title_'.App::getLocale(), 'text->text_'.App::getLocale()], $request->name)->get();
        //dd($resultado);
        return view('page.buscador',compact('resultado'));
    }
}
