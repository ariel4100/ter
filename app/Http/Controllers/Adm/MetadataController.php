<?php

namespace App\Http\Controllers\Adm;

use App\Metadata;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetadataController extends Controller
{
    function index()
    {
        $metadatos = Metadata::all();
        return view('adm.metadata.index',  compact('metadatos'));
    }

    function create()
    {
        return view('adm.metadata.create');
    }

    function store(Request $request)
    {
        //dd($request->all());
        $meta = new Metadata();
        $meta->section = $request->section;
        $meta->text = $request->only('es','en');
        $meta->save();
        return back()->with('status', 'Metadato creadó correctamente');
    }

    function edit($id)
    {
        $metadato = Metadata::find($id);

        return view('adm.metadata.edit', compact('metadato'));
    }

    public function update(Request $request,$id)
    {
        $meta = Metadata::find($id);
        $meta->section = $request->section;
        $meta->text = $request->only('es','en');
        $meta->save();

        return back()->with('status', 'Metadato actualizadó correctamente');
    }
}
