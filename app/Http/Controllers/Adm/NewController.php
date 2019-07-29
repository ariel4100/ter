<?php

namespace App\Http\Controllers\Adm;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{

    public function index()
    {
        $novedades = News::orderBy('order')->get();
        return view('adm.news.index',compact('novedades'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('adm.news.create',compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $gallery = $request->gallery;
        if (isset($gallery))
        {
            foreach ($gallery as $k => $item) {
                $path = $item['image']->store('uploads/noticia');
                $gallery[$k]['image'] = $path;
            }
        }
        $noticia = new News();
        $noticia->text = $request->only('es','en');
        $noticia->image = $gallery;
        $noticia->order = $request->order;
        $noticia->category_id = $request->category_id;
        $noticia->save();
        //IMAGE

        return back()->with('status','Se creó correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $noticia = News::find($id);
        $categories = Category::all();
        return view('adm.news.edit',compact('noticia','categories'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $gallery = $request->gallery;
        $noticia = News::find($id);
        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $noticia->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('uploads/noticia');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        $noticia->text = $request->only('es','en');
        $noticia->image = $gallery;
        $noticia->order = $request->order;
        $noticia->category_id = $request->category_id;
        $noticia->save();

        return redirect()->route('noticia.index')->with('status','Se actualizó correctamente');
    }


    public function destroy($id)
    {
        News::find($id)->delete();

        return back()->with('status','Se eliminó correctamente');
    }
}
