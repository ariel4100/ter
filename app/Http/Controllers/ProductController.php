<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Family;
use App\Models;
use App\Product;
use App\Serie;
use App\Subfamily;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    public function familias(){
        $familias = Family::orderBy('order')->get();
        return view('page.productos.familias',compact('familias'));
    }

    public function marcas($id){
        $marcas = Brand::where('family_id',$id)->orderBy('order')->get();
        $subfamilias = Subfamily::where('family_id',$id)->orderBy('order')->get();
        return view('page.productos.marcas',compact('marcas','subfamilias'));
    }

    public function modelos($id){
//        dd($id);
//        $modelos = Models::where('brand_id',$id)->orderBy('order')->get();
        $modelos = Models::where('brand_id',$id)->orderBy('order')->get();
        $marcas = Brand::with('model')
            ->with('model.serie')
            ->orderBy('order')->get();
//        dd($modelos);
        return view('page.productos.modelos',compact('modelos','marcas'));
    }

    public function serie($id){
        $series = Serie::where('model_id',$id)->orderBy('order')->get();
        $modelos = Models::orderBy('order')->get();
        $marcas = Brand::with('model')
            ->with('model.serie')
            ->orderBy('order')->get();
//        dd($series);
        return view('page.productos.series',compact('series','modelos','marcas'));
    }
//    public function subfamiliaserie($id){
//        $series = Serie::where('subfamily_id',$id)->orderBy('order')->get();
//        $subfamilias = Subfamily::orderBy('order')->get();
////        dd($series);
//        return view('page.productos.series',compact('series','subfamilias'));
//    }

    public function seriesub($id){
        $series = Serie::where('subfamily_id',$id)->orderBy('order')->get();
        $subfamilias = Subfamily::orderBy('order')->get();
//        dd($series);
        return view('page.productos.seriesub',compact('series','subfamilias'));
    }

    public function productossub($id){
        $productos = Product::where('serie_id',$id)->orderBy('order')->get();
        $subfamilias = Subfamily::orderBy('order')->get();

//        dd($productos);
        return view('page.productos.productossub',compact('productos','subfamilias'));
    }

    public function productosub($id){
        $producto = Product::find($id);
        $productos = Product::where('serie_id',$id)->orderBy('order')->get();
//        $modelos = Models::orderBy('order')->get();
//        $marcas = Brand::orderBy('order')->get();
//        $series = Serie::orderBy('order')->get();
        dd($productos);
        return view('page.productos.productossub',compact('productos','modelos','marcas','series','producto'));
    }

    public function productos($id){
        $productos = Product::where('serie_id',$id)->orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();

//        dd($modelos);
        return view('page.productos.productos',compact('productos','marcas'));
    }

    public function producto($id){
        $producto = Product::find($id);
        $text = $producto->text[App::getLocale()];
        $marcas = Brand::orderBy('order')->get();

        $productos = Serie::orderBy('order')->get();
        dd($producto);
        return view('page.productos.producto',compact('productos','marcas','producto','text'));
    }
}
