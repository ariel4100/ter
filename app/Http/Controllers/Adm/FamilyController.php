<?php

namespace App\Http\Controllers\Adm;

use App\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamilyController extends Controller
{
    public function index()
    {
        $familias = Family::orderBy('order')->get();
        return view('adm.family.index',compact('familias'));
    }

    public function create()
    {

        return view('adm.family.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $gallery = $request->gallery;

        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('uploads/familia');
                $gallery[$k]['image'] = $path;
            }
        }

        $family = new Family();
        $family->text = $request->only('es','en');
        $family->image = $gallery;
        $family->order = $request->order;
        $family->save();

        return back()->with('status','Familia creadó correctamente');
    }

    public function edit($id)
    {
        $familia = Family::find($id);
        return view('adm.family.edit',compact('familia'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $gallery = $request->gallery;
        $family = Family::find($id);

        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $family->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('uploads/familia');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $family->text = $request->only('es','en');
        $family->image = $gallery;
        $family->order = $request->order;
        $family->update();

        return back()->with('status','Familia actualizado correctamente');
    }

    public function delete($id)
    {
        Family::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
