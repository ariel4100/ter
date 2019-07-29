<?php

namespace App\Http\Controllers\Adm;

use App\Family;
use App\Subfamily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubfamilyController extends Controller
{
    public function index()
    {
        $subfamilias = Subfamily::orderBy('order')->get();
        return view('adm.subfamily.index',compact('subfamilias'));
    }

    public function create()
    {
        $familias = Family::orderBy('order')->get();
        return view('adm.subfamily.create',compact('familias'));
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $gallery = $request->gallery;

        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('uploads/subfamilia');
                $gallery[$k]['image'] = $path;
            }
        }

        $subfamilia = new Subfamily();
        $subfamilia->text = $request->only('es','en');
        $subfamilia->image = $gallery;
        $subfamilia->order = $request->order;
        $subfamilia->family_id = $request->family_id;
        $subfamilia->save();

        return back()->with('status','Subfamilia creadó correctamente');
    }

    public function edit($id)
    {
        $familias = Family::orderBy('order')->get();
        $subfamilia = Subfamily::find($id);
        return view('adm.subfamily.edit',compact('familias', 'subfamilia'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $gallery = $request->gallery;
        $subfamilia = Subfamily::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $subfamilia->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('uploads/subfamilia');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $subfamilia->text = $request->only('es','en');
        $subfamilia->image = $gallery;
        $subfamilia->order = $request->order;
        $subfamilia->family_id = $request->family_id;
        $subfamilia->update();

        return back()->with('status','Subamilia actualizado correctamente');
    }

    public function delete($id)
    {
        Subfamily::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
