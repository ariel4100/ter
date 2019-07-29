<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactoMail;
use App\Mail\PostventaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function contacto(Request $request){
         //dd($request->all());
        $data = $request->all();
        if(!isset($data["terminos"]))
            return back()->withInput($data)->withErrors(['status' => __('I accept the terms and conditions of privacy')]);

        Mail::to('arielcallisaya00@gmail.com')->send(new ContactoMail($data));


        if (count(Mail::failures()) > 0)
            return back()->withErrors(['status' => "Ha ocurrido un error al enviar el correo"]);
        else
            return back()->with('status',"Correo enviado correctamente");
    }
}
