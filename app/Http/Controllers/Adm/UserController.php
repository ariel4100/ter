<?php

namespace App\Http\Controllers\Adm;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('adm.users.index',compact('usuarios'));
    }

    public function create()
    {
        return view('adm.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('status','Usuario creadó correctamente');
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('adm.users.edit',compact('usuario'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('status','Usuario actualizadó correctamente');
    }
}
