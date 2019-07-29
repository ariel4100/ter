<?php

namespace App\Http\Controllers\Adm;

use App\Brand;
use App\Family;
use App\Models;
use App\Product;
use App\Serie;
use App\Subfamily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::orderBy('order')->get();
        return view('adm.product.index',compact('productos'));
    }

    public function create()
    {
        $familias = Family::with('brand')
            ->with('brand.model')
            ->with('brand.model.serie')
            ->with('brand.model.serie.product')
            ->with('subfamily')
            ->with('subfamily.serie')
            ->with('subfamily.serie.product')
            ->orderBy('order')
            ->get();
        $marcas = Brand::orderBy('order')->get();
        $modelos = Models::orderBy('order')->get();
        $series = Serie::orderBy('order')->get();
        $subfamilias = Subfamily::orderBy('order')->get();
        $productos = Product::orderBy('order')->get();
//        dd($familias);
        return view('adm.product.create',compact('familias','marcas','modelos','series','subfamilias','productos'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $imagenes = $request->imagenes;
        $gallery = $request->gallery;
        $archivos = $request->file;

        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('uploads/productos');
                $gallery[$k]['image'] = $path;
            }
        }

        if (isset($imagenes))
        {
            foreach ($imagenes as $k=>$item)
            {
                $path = $item['image']->store('uploads/productos');
                $imagenes[$k]['image'] = $path;
            }
        }

        if (isset($archivos))
        {
            foreach ($archivos as $k=>$item)
            {
                $path = $item['image']->store('uploads/productos');
                $archivos[$k]['image'] = $path;
            }
        }

        $product = new Product();
        $product->text = $request->only('es','en');
        $product->image = ['gallery' => $gallery,'imagenes' => $imagenes,'archivos' => $archivos];
        $product->order = $request->order;
        $product->family_id = $request->family_id;
        $product->subfamily_id = $request->subfamily_id;
        $product->brand_id = $request->marca_id ;
        $product->model_id = $request->modelo_id ;
        $product->serie_id = $request->serie_id ;
        $product->save();

        $product->related()->sync($request->related_id);

        return back()->with('status','Producto creadó correctamente');
    }

    public function edit($id)
    {
//        $producto = Product::find($id);
        $producto = Product::with('subfamily')
            ->with('family')
            ->with('family.subfamily')
            ->with('brand')
            ->with('brand.model')
            ->with('brand.model.serie')
            ->with('family.brand')
            ->with('family.brand.model')
            ->with('family.brand.model.serie')
            ->with('model')
            ->with('model.serie')
//            ->with('family.brand.model.serie')
            ->with('serie')
            ->with('subfamily.serie')
            ->with('family.subfamily.serie')
//            ->with('family.brand')
            //            ->with('subfamily.family.subfamily')
//            ->with('subfamily.family.subfamily')
//            ->with('model')
//            ->with('brand.model')
//            ->with('brand.model.')
            ->where('id',$id)->first();
        $familias = Family::with('brand')
            ->with('brand.model')
            ->with('subfamily')
            ->with('subfamily.serie')
//            ->with('brand.model')
            ->with('brand.model.serie')
//            ->with('brand.model.serie.product')
//            ->with('subfamily')
//            ->with('subfamily.serie')
//            ->with('subfamily.serie.product')
            ->orderBy('order')
            ->get();
        $subfamilias = Subfamily::orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();
        $modelos = Models::orderBy('order')->get();
        $series = Serie::orderBy('order')->get();
        $productos = Product::orderBy('order')->get();

        return view('adm.product.edit',compact('producto','familias','marcas','modelos','series','subfamilias','productos'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        $imagenes = $request->imagenes;
        $gallery = $request->gallery;
        $archivos = $request->file;

        $producto = Product::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $producto->image['gallery'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('uploads/productos');
                    $gallery[$k]['image'] = $path;
                }
            }
        }

        if (isset($imagenes))
        {
            //dd($gallery);
            foreach ($imagenes as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($contenido->image['imagenes'][$k]);
                    $imagenes[$k]['image'] = $producto->image['imagenes'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store("uploads/productos");
                    $imagenes[$k]['image'] = $path;
                }
            }
        }

        if (isset($archivos))
        {
            //dd($gallery);
            foreach ($archivos as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $archivos[$k]['image'] = $producto->image['archivos'][$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('uploads/productos');
                    $archivos[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $producto->text = $request->only('es','en');
        $producto->image = ['gallery' => $gallery,'imagenes' => $imagenes,'archivos' => $archivos];
        $producto->order = $request->order;
        $producto->family_id = $request->family_id;
        $producto->subfamily_id = $request->subfamilia_id;
        $producto->brand_id = $request->marca_id ;
        $producto->model_id = $request->modelo_id ;
        $producto->serie_id = $request->serie_id ;
        $producto->update();

        $producto->related()->sync($request->related_id);

        return back()->with('status','Producto actualizado correctamente');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
