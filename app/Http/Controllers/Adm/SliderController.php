<?php

namespace App\Http\Controllers\Adm;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function list($section)
    {
        $slider = Slider::where('section', $section)->orderBy('order')->get();
        return view('adm.slider.index',compact('section','slider'));
    }
    public function create($section)
    {
        return view('adm.slider.create', ['section' => $section]);
    }


    public function store(Request $request, Slider $slider)
    {
//        dd($request->all());

        $slider = new Slider();
        $slider->section = $request->section;
        $slider->order = $request->order;
        $slider->text = $request->only('es','en');
        if ($request->file('image'))
        {
            $path = $request['image']->store('uploads/sliders');
            $slider->image = $path;
        }
//        dd($slider);
        $slider->save();

        return redirect()->route('slider.list', ['seccion' => $slider->section])->with('status', 'Slider creado correctamente');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        $section = $slider->section;
        return view('adm.slider.edit', compact('slider','section'));
        //return view('adm.slider.edit', ['section' => $item->section, 'element' => $item]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());

        $slider = Slider::find($id);
        $slider->section = $request->section;
        $slider->order = $request->order;
        $slider->text = $request->only('es','en');

        if ($request->file('image'))
        {
            $path = $request->file('image')->store('uploads/sliders');
            $slider->image = "{$path}";
            //dd($slider);
        }
        $slider->save();

        return back()->with('status', 'Slider actualizado correctamente');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $section = $slider->section;
        $slider->delete();
        return redirect()->route('slider.list', compact('section'))->with('status', 'Slider eliminado correctamente.');
    }
}
