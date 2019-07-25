<?php

namespace App\Http\Controllers\Adm;

use App\Brand;
use App\Family;
use App\Models;
use App\Serie;
use App\Subfamily;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy('order')->get();
        return view('adm.serie.index',compact('series'));
    }

    public function create()
    {
        $familias = Family::with('brand')
            ->with('brand.model')
//            ->with('brand.model.serie')
//            ->with('brand.model.serie.product')
            ->with('subfamily')
//            ->with('subfamily.serie')
//            ->with('subfamily.serie.product')
            ->orderBy('order')
            ->get();
        $subfamilias = Subfamily::orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();
        $modelos = Models::orderBy('order')->get();
//        dd($familias);
        return view('adm.serie.create',compact('familias','marcas','modelos','subfamilias'));
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

        $serie = new Serie();
        $serie->text = $request->only('es','en');
        $serie->image = $gallery;
        $serie->order = $request->order;
        $serie->family_id = $request->family_id;
        $serie->subfamily_id = $request->subfamily_id;
        $serie->brand_id = $request->marca_id ;
        $serie->model_id = $request->modelo_id ;

//        dd($request->all());
        $serie->save();



        return back()->with('status','Serie creadó correctamente');
    }

    public function edit($id)
    {
        $serie = Serie::with('subfamily')
            ->with('family')
            ->with('family.subfamily')
            ->with('family.brand')
            //            ->with('subfamily.family.subfamily')
//            ->with('subfamily.family.subfamily')
//            ->with('model')
//            ->with('brand.model')
//            ->with('brand.model.')
            ->where('id',$id)->first();
        $familias = Family::with('brand')
            ->with('brand.model')
//            ->with('brand.model.serie')
//            ->with('brand.model.serie.product')
            ->with('subfamily')
//            ->with('subfamily.serie')
//            ->with('subfamily.serie.product')
            ->orderBy('order')
            ->get();
        $subfamilias = Subfamily::orderBy('order')->get();
        $marcas = Brand::orderBy('order')->get();

        return view('adm.serie.edit',compact('serie','familias','marcas','subfamilias'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());

        $gallery = $request->gallery;
        $serie = Serie::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $serie->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery/model');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $serie->text = $request->only('es','en');
        $serie->image = $gallery;
        $serie->order = $request->order;
        $serie->family_id = $request->family_id;
        $serie->subfamily_id = $request->subfamily_id;
        $serie->brand_id = $request->marca_id ;
        $serie->update();

        return back()->with('status','Serie actualizado correctamente');
    }

    public function delete($id)
    {
        Serie::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
