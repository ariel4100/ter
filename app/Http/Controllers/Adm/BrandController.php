<?php

namespace App\Http\Controllers\Adm;

use App\Brand;
use App\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $marcas = Brand::orderBy('order')->get();
        return view('adm.brand.index',compact('marcas'));
    }

    public function create()
    {
        $familias = Family::orderBy('order')->get();
//        dd($familias);
        return view('adm.brand.create',compact('familias'));
    }

    public function store(Request $request)
    {

        $gallery = $request->gallery;

        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('brand');
                $gallery[$k]['image'] = $path;
            }
        }

        $brand = new Brand();
        $brand->text = $request->only('es','en');
        $brand->image = $gallery;
        $brand->order = $request->order;
        $brand->family_id = $request->family_id;
        $brand->save();

        return back()->with('status','Marca creadó correctamente');
    }

    public function edit($id)
    {
        $marca = Brand::find($id);
        $familias = Family::orderBy('order')->get();
        /*$marcas=[];
        foreach ($marca->image as $key => $item) {
            $marcas[$key]['image']    = Storage::url($item['image']);
            $marcas[$key]['title_es'] = $item['title_es'];
            $marcas[$key]['title_en'] = $item['title_en'];
        }*/
        return view('adm.brand.edit',compact('marca','familias'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $gallery = $request->gallery;
        $brand = Brand::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $brand->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('brand');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $brand->text = $request->only('es','en');
        $brand->image = $gallery;
        $brand->order = $request->order;
        $brand->family_id = $request->family_id;
        $brand->update();

        return back()->with('status','Marca actualizado correctamente');
    }

    public function delete($id)
    {
        Brand::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
