<?php

namespace App\Http\Controllers\Adm;

use App\Brand;
use App\Family;
use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
    public function index()
    {
        $modelos = Models::orderBy('order')->get();
        return view('adm.model.index',compact('modelos'));
    }

    public function create()
    {
        $familias = Family::orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();
//        dd($familias);
        return view('adm.model.create',compact('familias','marcas'));
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $gallery = $request->gallery;

        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('uploads/model');
                $gallery[$k]['image'] = $path;
            }
        }

        $model = new Models();
        $model->text = $request->only('es','en');
        $model->image = $gallery;
        $model->order = $request->order;
        $model->family_id = $request->family_id;
        $model->brand_id = $request->marca_id ;
        $model->save();

        return back()->with('status','Modelo creadó correctamente');
    }

    public function edit($id)
    {
        $modelo = Models::find($id);
        $familias = Family::orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();
        return view('adm.model.edit',compact('modelo','familias','marcas'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());

        $gallery = $request->gallery;
        $model = Models::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $model->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery/model');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $model->text = $request->only('es','en');
        $model->image = $gallery;
        $model->order = $request->order;
        $model->family_id = $request->family_id;
        $model->brand_id = $request->marca_id ;
        $model->update();

        return back()->with('status','Modelo actualizado correctamente');
    }

    public function delete($id)
    {
        Models::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
